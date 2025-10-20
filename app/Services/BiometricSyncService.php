<?php

namespace App\Services;

use App\Contracts\BiometricDataSourceInterface;
use App\Models\Attendance;
use App\Models\AttendanceCheck;
use App\Models\Employee;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BiometricSyncService
{
    public function __construct(private BiometricDataSourceInterface $device) {}

    public function fetchAttendanceByEmployee(Employee $employee)
    {
        try {
            DB::beginTransaction();

            $attendances = Attendance::where('state', 'pending')
                ->whereHas('scheduling', function ($q) use ($employee) {
                    return $q->where('employee_id', $employee->id);
                })->get();

            foreach ($attendances as $attendance) {
                $biometricAttendances = $this->device->getAttendancesByEmployeeAndDate(
                    $employee->document_number,
                    $attendance->attendance_date->format('Y-m-d')
                );

                $attendanceCheckList = [];
                foreach ($attendance->attendanceChecks as $attendanceCheck) {
                    $auxDiff = null;
                    $auxIndex = null;
                    foreach ($biometricAttendances as $index => $biometricAttendance) {
                        if ($attendanceCheck->check_type === $biometricAttendance['type']) {
                            $diff = $attendanceCheck->check_time_expected->diffInMinutes(Carbon::parse($biometricAttendance['check_time']));
                            if (!$auxDiff || $diff <= $auxIndex) {
                                $auxDiff = $diff;
                                $auxIndex = $index;
                            }
                        }
                    }

                    $attendanceCheckList[] = [
                        'diff' => $auxDiff,
                        'attendance_check_id' => $attendanceCheck->id,
                        'biometric_attendance_index' => $auxIndex
                    ];
                }

                usort($attendanceCheckList, function ($a, $b) {
                    return $a['diff'] <=> $b['diff'];
                });


                foreach ($attendanceCheckList as $attendanceCheckItem) {
                    $attendanceCheck = AttendanceCheck::find($attendanceCheckItem['attendance_check_id']);
                    if ($biometricAttendances[$attendanceCheckItem['biometric_attendance_index']]) {
                        $attendanceCheck->check_time_actual = $biometricAttendances[$attendanceCheckItem['biometric_attendance_index']]['check_time'];
                        $attendanceCheck->update();
                        unset($biometricAttendances[$attendanceCheckItem['biometric_attendance_index']]);
                    }
                }

                if (!$attendance->attendanceChecks->count()) {
                    $attendance->state = 'absence';
                } else {
                    $firstAttendanceCheck = $attendance->attendanceChecks->where('check_type', 'ENTRY')
                        ->sortBy('check_time_expected')
                        ->first();

                    if ($firstAttendanceCheck->check_time_actual <= $firstAttendanceCheck->check_time_expected) {
                        $attendance->state = 'attendance';
                    } else {
                        $attendance->state = 'delay';
                        $attendance->delay_time = $firstAttendanceCheck->check_time_expected
                            ->diffInMinutes($firstAttendanceCheck->check_time_actual);
                    }
                }

                $attendance->update();
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th);
            return false;
        }
    }
}

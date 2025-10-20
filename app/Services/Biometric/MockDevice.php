<?php

namespace App\Services\Biometric;

use App\Contracts\BiometricDataSourceInterface;
use Illuminate\Support\Carbon;

class MockDevice implements BiometricDataSourceInterface
{
    public function getAttendancesByEmployeeAndDate(string $employeeCode, string $date)
    {
        $checkTimeEntry = Carbon::parse("$date 08:00:00");
        $checkTimeExit = Carbon::parse("$date 17:00:00");

        $checkTimeEntry->subMinutes(rand(0, 15));
        $checkTimeExit->addMinutes(rand(0, 15));

        return [
            [
                'type' => 'ENTRY',
                'check_time' => $checkTimeEntry->format('Y-m-d H:i:s'),
            ],
            [
                'type' => 'EXIT',
                'check_time' => $checkTimeExit->format('Y-m-d H:i:s'),
            ]
        ];
    }
}

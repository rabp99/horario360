<?php

namespace App\Contracts;

interface BiometricDataSourceInterface
{
    public function getAttendancesByEmployeeAndDate(string $employeeCode, string $date);
}

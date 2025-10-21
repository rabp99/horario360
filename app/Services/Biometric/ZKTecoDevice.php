<?php

namespace App\Services\Biometric;

use App\Contracts\BiometricDataSourceInterface;

class ZKTecoDevice implements BiometricDataSourceInterface
{
    public function getAttendances(): array
    {
        // Retornar los registros de asistencia
        return [
            ['user_id' => 1, 'timestamp' => now(), 'status' => 'check_in'],
        ];
    }
}

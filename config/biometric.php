<?php

return [
    'drivers' => [
        'zkteco' => App\Services\Biometric\ZKTecoDevice::class,
        'mock' => App\Services\Biometric\MockDevice::class,
    ],
];

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\BiometricDataSourceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $driver = config('biometric.drivers.' . env('BIOMETRIC_DRIVER', 'zkteco'));

        $this->app->bind(BiometricDataSourceInterface::class, $driver);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

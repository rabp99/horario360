<?php

use App\Livewire\Employee\EmployeeCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Employee\EmployeeIndex;
use App\Livewire\Schedule\ScheduleIndex;
use App\Livewire\Schedule\ScheduleCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('trabajadores', EmployeeIndex::class)->name('employee.employee-index');
    Route::get('trabajadores/nuevo', EmployeeCreate::class)->name('employee.employee-create');
    Route::get('horarios', ScheduleIndex::class)->name('schedule.schedule-index');
    Route::get('horarios/nuevo', ScheduleCreate::class)->name('schedule.schedule-create');
});

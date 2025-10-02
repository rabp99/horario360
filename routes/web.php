<?php

use App\Livewire\Employee\EmployeeCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Employee\EmployeeIndex;
use App\Livewire\Schedule\ScheduleIndex;
use App\Livewire\Schedule\ScheduleCreate;
use App\Livewire\Area\AreaIndex;
use App\Livewire\Area\AreaCreate;
use App\Livewire\Service\ServiceIndex;
use App\Livewire\Service\ServiceCreate;
use App\Livewire\Position\PositionIndex;
use App\Livewire\Position\PositionCreate;
use App\Livewire\WorkingCondition\WorkingConditionIndex;
use App\Livewire\WorkingCondition\WorkingConditionCreate;
use App\Livewire\Scheduling\SchedulingIndex;
use App\Livewire\Scheduling\SchedulingManage;

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

    Route::get('unidad-organica', AreaIndex::class)->name('area.area-index');
    Route::get('unidad-organica/nuevo', AreaCreate::class)->name('area.area-create');

    Route::get('servicio', ServiceIndex::class)->name('service.service-index');
    Route::get('servicio/nuevo', ServiceCreate::class)->name('service.service-create');

    Route::get('cargo', PositionIndex::class)->name('position.position-index');
    Route::get('cargo/nuevo', PositionCreate::class)->name('position.position-create');

    Route::get('condition-laboral', WorkingConditionIndex::class)->name('working-condition.working-condition-index');
    Route::get('condition-laboral/nuevo', WorkingConditionCreate::class)->name('working-condition.working-condition-create');

    Route::get('programaciones', SchedulingIndex::class)->name('scheduling.scheduling-index');
    Route::get('programaciones/programar/{schedulingPeriodsArea}', SchedulingManage::class)->name('scheduling.scheduling-manage');
});

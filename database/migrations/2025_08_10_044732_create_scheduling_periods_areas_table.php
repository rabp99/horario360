<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scheduling_periods_areas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scheduling_period_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedInteger('expected_scheduled_employee_count');
            $table->unsignedInteger('actual_scheduled_employee_count');
            $table->enum('state', [
                'SIN INICIAR',
                'POR PROGRAMAR',
                'PROGRAMADO',
                'APROBADO',
                'VERIFICADO'
            ]);

            $table->timestamps();

            $table->foreign('scheduling_period_id')->references('id')->on('scheduling_periods');
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduling_periods_areas');
    }
};

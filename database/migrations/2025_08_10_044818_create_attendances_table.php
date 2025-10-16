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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['attendance', 'occurrence']);
            $table->unsignedBigInteger('scheduling_id');
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('occurrence_id')->nullable();
            $table->date('attendance_date');
            $table->enum('state', [
                'attendance',
                'absence',
                'problem',
                'justified_absence',
                'vacation',
                'delay',
                'pending',
                'free_day'
            ]);
            $table->time('delay_time')->nullable();
            $table->timestamps();

            $table->foreign('scheduling_id')->references('id')->on('schedulings');
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('occurrence_id')->references('id')->on('occurrences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};

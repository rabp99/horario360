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
        Schema::create('attendance_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('attendance_id');
            $table->dateTime('check_time_expected');
            $table->dateTime('check_time_actual')->nullable();
            $table->enum('check_type', ['ENTRY', 'EXIT']);
            $table->timestamps();

            $table->foreign('attendance_id')->references('id')->on('attendances');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_checks');
    }
};

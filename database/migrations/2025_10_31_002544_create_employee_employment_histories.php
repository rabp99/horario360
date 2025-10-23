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
        Schema::create('employee_employment_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('working_condition_detail_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('pension_scheme_id');
            // relacion con tabla pension scheme
            $table->string('level');
            $table->date('start');
            $table->date('end')->nullable();
            $table->boolean('is_active');
            $table->unsignedDecimal('salary');
            $table->date('start_pension_scheme');
            $table->boolean('pension_4th');
            $table->boolean('sctr');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('working_condition_detail_id')->references('id')->on('working_condition_details')->name('ewchd_fk');           

            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('pension_scheme_id')->references('id')->on('pension_schemes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_employment_histories');
    }
};

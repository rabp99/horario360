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
        Schema::create('working_condition_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('working_condition_id');
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('working_condition_id')->references('id')->on('working_conditions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_condition_details');
    }
};

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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->date('holiday_date');
            $table->string('description')->nullable();
            $table->boolean('is_past_date');
            $table->unsignedBigInteger('user_creator_id')->nullable();
            $table->unsignedBigInteger('user_modifier_id')->nullable();
            $table->timestamps();

            $table->foreign('user_creator_id')->references('id')->on('users');
            $table->foreign('user_modifier_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holiday');
    }
};

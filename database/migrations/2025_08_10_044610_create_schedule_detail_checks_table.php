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
        Schema::create('schedule_detail_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_detail_id');
            $table->time('check_time');
            $table->enum('check_type', ['ENTRY', 'EXIT']);
            $table->boolean('same_day')->default(false);
            $table->timestamps();

            $table->foreign('schedule_detail_id')->references('id')->on('schedule_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_detail_checks');
    }
};

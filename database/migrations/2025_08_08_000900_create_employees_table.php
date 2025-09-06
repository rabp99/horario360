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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            // Datos personales
            $table->string('first_name');
            $table->string('last_name1');
            $table->string('last_name2');
            $table->enum('document_type', ['DNI', 'CE']);
            $table->string('document_number');
            $table->string('birth_date');
            $table->enum('gender', ['M', 'F']);
            $table->enum('marital_status', ['SOLTERO', 'CASAOO', 'VIUDO', 'DIVORCIADO']);
            $table->string('ruc');
            $table->boolean('has_disability');
            $table->string('profile_photo_path')->nullable();

            // Información de contacto
            $table->unsignedBigInteger('location_code_id');
            $table->string('address');
            $table->string('address_reference');
            $table->string('phone'); // en settngs setear prefijo por defecto
            $table->string('cell_phone'); // en settings setera prefijo por defecto
            $table->string('email')->unique();

            // Información Académica
            $table->unsignedBigInteger('education_level_detail_id');
            $table->unsignedBigInteger('occupation_id');
            $table->string('tuition_code');
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedSmallInteger('specialty_number');
            $table->unsignedBigInteger('university_id');
            $table->year('graduation_year');

            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('location_code_id')->references('id')->on('location_codes');
            $table->foreign('education_level_detail_id')->references('id')->on('education_level_details');
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->foreign('specialty_id')->references('id')->on('specialties');
            $table->foreign('university_id')->references('id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

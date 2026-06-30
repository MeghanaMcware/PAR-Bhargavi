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
        Schema::create('hospital_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->unique()->nullable();
            $table->tinyInteger('sepsis_diagnosis')->comment('1=Yes, 2=No');
            $table->tinyInteger('consent_share')->comment('1=Yes, 2=No');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_registrations');
    }
};

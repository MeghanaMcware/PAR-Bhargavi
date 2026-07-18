<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('serial_labs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->string('day')->nullable();
            $table->string('lab_parameters')->nullable();
            $table->string('wbc_tc')->nullable();
            $table->string('bands_left_shift')->nullable();
            $table->string('nlr')->nullable();
            $table->string('platelets')->nullable();
            $table->string('hb')->nullable();
            $table->string('pct')->nullable();
            $table->string('crp')->nullable();
            $table->string('s_lactate')->nullable();
            $table->string('urea_bun')->nullable();
            $table->string('s_creatinine')->nullable();
            $table->string('ast')->nullable();
            $table->string('alt')->nullable();
            $table->string('s_bilurubin')->nullable();
            $table->string('albubin')->nullable();
            $table->string('ldh')->nullable();
            $table->string('il_6_8_10')->nullable();
            $table->string('abg')->nullable();
            $table->string('ph')->nullable();
            $table->string('pc02')->nullable();
            $table->string('po2')->nullable();
            $table->string('hco3')->nullable();
            $table->string('coagulation_profile')->nullable();
            $table->string('aptt')->nullable();
            $table->string('pt')->nullable();
            $table->string('inr')->nullable();
            $table->string('d_dimer')->nullable();
            $table->string('fibrinogen')->nullable();
            $table->string('electrolytes')->nullable();
            $table->string('na')->nullable();
            $table->string('k')->nullable();
            $table->string('cl')->nullable();
            $table->string('bicarbonates')->nullable();
            $table->string('hba1c')->nullable();
            $table->string('spo2')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('serial_labs');
    }
};

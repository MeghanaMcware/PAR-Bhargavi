<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_code')->nullable();
            $table->string('uhid')->nullable()->unique();
            $table->date('date_of_admission')->nullable();
            $table->time('time_of_presentation')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->text('chief_complaints')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('symptom_duration')->nullable();
            $table->string('comorbidities_cc_index')->nullable();
            $table->string('comorbidity_less_5_years')->nullable();
            $table->string('previously_ill_last_3_months')->nullable();
            $table->string('prev_antibiotic_last_3_months')->nullable();
            $table->string('initial_probable_sepsis_diagnosis')->nullable();
            $table->string('direct_or_referred')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};

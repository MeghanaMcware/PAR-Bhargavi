<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinical_assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->string('sofa_score_admission')->nullable();
            $table->string('qsofa_score')->nullable();
            $table->string('mews_score')->nullable();
            $table->string('news_score')->nullable();
            $table->string('mdro_screening')->nullable();
            $table->string('organ_dysfunction')->nullable();
            $table->date('first_lactate_ordered_date')->nullable();
            $table->time('first_lactate_ordered_time')->nullable();
            $table->string('first_lactate_value')->nullable();
            $table->date('blood_cultures_sent_date')->nullable();
            $table->string('other_samples_sent_cultures')->nullable();
            $table->date('other_culture_sent_date')->nullable();
            $table->time('other_culture_sent_time')->nullable();
            $table->date('first_dose_antibiotic_date')->nullable();
            $table->string('name_emperical_antibiotic')->nullable();
            $table->string('initial_fluid_administered')->nullable();
            $table->string('volume_fluid_administered')->nullable();
            $table->string('patient_response_post_infusion')->nullable();
            $table->string('repeat_lactate_after_infusion')->nullable();
            $table->integer('no_of_organs_affected')->nullable();
            $table->integer('any_surgery_28_days')->nullable();
            $table->date('molecular_tests_ordered_date')->nullable();
            $table->string('which_molecular_test')->nullable();
            $table->string('molecular_tests_result_received_date')->nullable();
            $table->string('blood_culture_result')->nullable();
            $table->date('blood_culture_positive_date')->nullable();
            $table->time('blood_culture_positive_time')->nullable();
            $table->string('antibiotic_changed')->nullable();
            $table->text('rapid_pcr_results')->nullable();
            $table->string('antibiotics_change_after_pcr')->nullable();
            $table->date('other_culture_reported_on')->nullable();
            $table->string('sample_culture_growth')->nullable();
            $table->string('resistant_organism')->nullable();
            $table->string('mdro_screening_result')->nullable();
            $table->date('usg_abdomen_date')->nullable();
            $table->text('usg_abdomen_findings')->nullable();
            $table->date('chest_xray_date')->nullable();
            $table->text('chest_xray_findings')->nullable();
            $table->date('pet_ct_date')->nullable();
            $table->text('pet_ct_findings')->nullable();
            $table->date('followup_ct_date')->nullable();
            $table->text('followup_ct_findings')->nullable();
            $table->string('repeat_chest_xray_dates')->nullable();
            $table->text('xray_findings')->nullable();
            $table->date('pleural_tapping_date')->nullable();
            $table->text('pleural_fluid_culture')->nullable();
            $table->integer('day_antibiotic_change')->nullable();
            $table->integer('empirical_antibiotic_days')->nullable();
            $table->integer('definitive_antibiotic_days')->nullable();
            $table->string('source_established')->nullable();
            $table->string('outcome_day7')->nullable();
            $table->string('outcome_day14')->nullable();
            $table->string('outcome_day21')->nullable();
            $table->string('outcome_day28')->nullable();
            $table->integer('icu_days')->nullable();
            $table->integer('ward_days')->nullable();
            $table->date('discharge_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinical_assessments');
    }
};

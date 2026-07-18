<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('culture_sensitivities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('culture_id')->constrained('cultures')->cascadeOnDelete();
            $table->string('antibiotic_name')->index();
            $table->string('result')->index(); // S, I, R
            $table->timestamps();
            
            // Composite index for fast searching e.g., 'MEROPENEM' and 'R'
            $table->index(['antibiotic_name', 'result']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('culture_sensitivities');
    }
};

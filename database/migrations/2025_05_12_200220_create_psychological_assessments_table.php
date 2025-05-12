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
        Schema::create('psychological_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('general_status')->nullable();
            $table->string('sleep_patterns')->nullable();
            $table->string('appetite')->nullable();
            $table->string('memory_status')->nullable();
            $table->string('emotional_response')->nullable();
            $table->string('illness_awareness')->nullable();
            $table->string('social_orientation')->nullable();
            $table->string('disease_perception')->nullable();
            $table->string('medication_effects')->nullable();
            $table->string('psychological_effects')->nullable();
            $table->text('recommendations')->nullable();
            $table->longText('notes')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('patient_id');
            $table->foreignId('appointment_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psychological_assessments');
    }
};

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
        Schema::create('social_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('general_status')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('income_source')->nullable();
            $table->string('housing_type')->nullable();
            $table->string('housing_status')->nullable();
            $table->string('landlord_name')->nullable();
            $table->string('landlord_phone')->nullable();
            $table->string('condition_before_illness')->nullable();
            $table->string('condition_after_illness')->nullable();
            $table->date('illness_date')->nullable();
            $table->string('travel_history')->nullable();
            $table->string('family_illness_history')->nullable();
            $table->string('disease_type')->nullable();
            $table->string('severity_rating')->nullable();
            $table->string('doctor_notes')->nullable();
            $table->string('social_worker_notes')->nullable();
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
        Schema::dropIfExists('social_assessments');
    }
};

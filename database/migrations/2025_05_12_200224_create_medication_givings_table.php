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
        Schema::disableForeignKeyConstraints();

        Schema::create('medication_givings', function (Blueprint $table) {
            $table->id();
            $table->string('blood_pressure')->nullable();
            $table->string('temperature')->nullable();
            $table->string('pulse')->nullable();
            $table->string('respiration_rate')->nullable();
            $table->string('pain_score')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('body_surface_area')->nullable();
            $table->string('vascular_access_device')->nullable();
            $table->string('electrolyte_status')->nullable();
            $table->string('chemotherapy_cycle')->nullable();
            $table->string('day_of_treatment')->nullable();
            $table->string('referred_by_doctor')->nullable();
            $table->string('check_in_time')->nullable();
            $table->string('registry_sheet_number')->nullable();
            $table->string('pathology_report_number')->nullable();
            $table->string('radiology_report_number')->nullable();
            $table->string('previous_chemo_treatment')->nullable();
            $table->date('chemo_pre_treatment_date')->nullable();
            $table->string('previous_chemo_cycle_date')->nullable();
            $table->string('pre_chemo_lab_test_results')->nullable();
            $table->string('health_center_visit')->nullable();
            $table->string('fever_during_cycle')->nullable();
            $table->string('fever_value')->nullable();
            $table->string('patient_has_thermometer')->nullable();
            $table->string('new_symptoms')->nullable();
            $table->string('next_appointment_for_cycle')->nullable();
            $table->text('nursing_notes')->nullable();
            $table->text('doctor_notes')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('patient_id');
            $table->foreignId('medication_prescription_id');
            $table->foreignId('appointment_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_givings');
    }
};

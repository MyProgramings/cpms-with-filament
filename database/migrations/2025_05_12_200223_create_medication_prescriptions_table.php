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

        Schema::create('medication_prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('pharmacist')->nullable();
            $table->string('preparer')->nullable();
            $table->string('quantity')->nullable();
            $table->string('total_quantity')->nullable();
            $table->string('medicine_type')->nullable();
            $table->string('power')->nullable();
            $table->integer('doses_per_day')->nullable();
            $table->integer('duration_days')->nullable();
            $table->string('medication_notes')->nullable();
            $table->boolean('doctor_confirmed')->default(false);
            $table->timestamp('doctor_confirmed_at')->nullable();
            $table->boolean('pharmacist_dispensed')->default(false);
            $table->timestamp('pharmacist_dispensed_at')->nullable();
            $table->foreignId('pharmacist_id')->nullable()->constrained('users');
            $table->foreignId('user_id');
            $table->foreignId('appointment_id');
            $table->foreignId('patient_id');
            $table->foreignId('medication_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_prescriptions');
    }
};

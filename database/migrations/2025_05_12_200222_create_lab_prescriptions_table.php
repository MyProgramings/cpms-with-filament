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
        Schema::create('lab_prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('test_description')->nullable();
            $table->string('result_description')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('appointment_id');
            $table->foreignId('patient_id');
            $table->foreignId('checkup_category_id');
            $table->foreignId('lab_test_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_prescriptions');
    }
};

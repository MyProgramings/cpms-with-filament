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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('social_status')->nullable();
            $table->string('profession')->nullable();
            $table->string('nationality')->nullable();
            $table->string('card_number')->nullable();
            $table->string('file_number')->nullable()->index();
            $table->string('file_colors')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('temporary_address')->nullable();
            $table->string('near_mosque')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('incident_date')->nullable();
            $table->boolean('previous_treatment')->nullable();
            $table->boolean('chemotherapy')->nullable();
            $table->boolean('radiotherapy')->nullable();
            $table->boolean('surgery')->nullable();
            $table->string('site_of_tumor')->nullable();
            $table->string('type_of_tumor')->nullable();
            $table->string('status')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('speciality')->nullable();
            $table->string('reported_by')->nullable();
            $table->boolean('is_smokeout')->nullable();
            $table->boolean('is_khat')->nullable();
            $table->boolean('is_chwingtobaco')->nullable();
            $table->date('date_of_last_contact')->nullable();
            $table->string('cause_of_death')->nullable();
            $table->text('notes_re')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};

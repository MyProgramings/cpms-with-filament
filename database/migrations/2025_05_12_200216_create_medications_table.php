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
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('medication_name');
            $table->integer('quantity_in_stock');
            $table->string('dosage_strength')->nullable();
            $table->string('dosage_form')->nullable();
            $table->string('category')->nullable();
            $table->date('expiration_date')->nullable();
            $table->text('notes')->nullable();
            $table->integer('unit_price')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medications');
    }
};

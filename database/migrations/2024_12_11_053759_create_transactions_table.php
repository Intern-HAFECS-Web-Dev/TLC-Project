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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('purchase')->nullable();
            $table->string('initial_prize')->nullable();
            $table->string('discount')->nullable();
            $table->string('final_prize')->nullable();
            $table->string('total_prize')->nullable();
            $table->enum('status', ['completed', 'inProgress', 'inReview', 'cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

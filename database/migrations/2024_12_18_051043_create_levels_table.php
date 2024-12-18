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
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('nama sertifikat');
            $table->integer('duration')->nullable()->comment('durasi sertifikat format Bulan');
            $table->string('benefit')->nullable()->comment('benefit mengikuti sertifikat');
            $table->string('condition')->nullable()->comment('benefit mengikuti sertifikat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levels');
    }
};

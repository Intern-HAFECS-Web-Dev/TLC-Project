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
            $table->decimal('price', 10)->nullable()->comment('Harga dasar sertifikat');
            $table->decimal('discount', 5)->nullable()->comment('Diskon dalam persentase');
            $table->decimal('final_price', 10)->nullable()->comment('Harga akhir setelah diskon');
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

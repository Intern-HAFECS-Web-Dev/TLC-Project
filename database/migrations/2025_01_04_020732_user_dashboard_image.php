<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_image_dashboards', function (Blueprint $table) {
            $table->id(); 
            $table->string('name')->nullable(); 
            $table->string('image')->nullable(); 
            $table->text('description')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_image_dashboards');
    }
};

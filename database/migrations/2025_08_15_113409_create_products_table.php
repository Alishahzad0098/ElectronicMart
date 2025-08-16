<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('name');
            $table->string('ram')->nullable();
            $table->string('storage')->nullable();
            $table->string('water_resistant')->nullable();
            $table->string('description');
            $table->string('price');
           $table->json('images')->nullable();
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

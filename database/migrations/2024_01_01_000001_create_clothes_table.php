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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('color');
            $table->string('size');
            $table->string('material');
            $table->decimal('price', 10, 2);
            $table->string('store')->nullable();
            $table->date('purchase_date')->nullable();
            $table->enum('status', ['novo', 'usado', 'desgastado', 'reparo', 'doado'])->default('novo');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes');
    }
};
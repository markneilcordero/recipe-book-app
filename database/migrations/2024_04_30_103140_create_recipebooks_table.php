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
        Schema::create('recipebooks', function (Blueprint $table) {
            $table->id('recipe_id');
            $table->string('title');
            $table->text('description');
            $table->integer('cooking_time');
            $table->enum('difficulty', ['easy', 'medium', 'hard']);
            $table->integer('servings');
            $table->text('ingredients');
            $table->text('steps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipebooks');
    }
};

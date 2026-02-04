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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->String('title', 500);
            $table->String('slug', 500);
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->String('image')->nullable();
            $table->enum('posted', ['yes', 'not'])->default('not');
            $table->timestamps();

            $table->foreignId('categorie_id')->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

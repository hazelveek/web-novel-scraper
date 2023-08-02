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
        Schema::create('novel_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('novel_id');
            $table->unsignedInteger('genre_id');
            $table->primary(['novel_id', 'genre_id'], 'novel_genre_primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novel_genres');
    }
};

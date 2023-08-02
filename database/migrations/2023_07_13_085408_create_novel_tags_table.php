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
        Schema::create('novel_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('novel_id');
            $table->unsignedInteger('tag_id');
            $table->primary(['novel_id', 'tag_id'], 'novel_tag_primary_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novel_tags');
    }
};

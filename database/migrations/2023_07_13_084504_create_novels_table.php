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
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\NovelSource::class);
            $table->string('title')->index();
            $table->string('slug')->unique();
            $table->string('author')->index();
            $table->text('novel_url');
            $table->string('completion_status')->default('ongoing')->index();
            $table->text('description');
            $table->string('cover_image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novels');
    }
};

<?php

use App\Models\Novel;
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
        Schema::create('novel_chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Novel::class);
            $table->string('chapter_title');
            $table->string('slug');
            $table->string('chapter_order_number')->nullable();
            $table->string('translator')->nullable();
            $table->string('editor')->nullable();
            $table->text('source_url')->nullable();
            $table->string('download_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novel_chapters');
    }
};

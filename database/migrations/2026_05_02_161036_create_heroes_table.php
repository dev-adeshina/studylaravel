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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            // Unique key to fetch by (e.g., 'home', 'blog', 'about')
            $table->string('page_key')->unique(); 
            
            // Layout toggle (e.g., 'home', 'split', 'centered', 'simple')
            $table->string('layout_type')->default('split');

            // Text Content
            $table->string('breadcrumb')->nullable(); //[cite: 1, 4]
            $table->text('title'); //[cite: 1, 2]
            $table->string('highlight_text')->nullable(); // For "StudyGuide"[cite: 1]
            $table->text('description')->nullable(); //[cite: 2, 4]
            
            // Media & Links
            $table->string('image_path')->nullable(); // For Home student photo[cite: 1]
            $table->string('primary_cta_text')->nullable(); //[cite: 1]
            $table->string('primary_cta_url')->nullable();
            $table->string('secondary_cta_text')->nullable(); //[cite: 1]
            $table->string('secondary_cta_url')->nullable();

            // Meta & Dynamic Data
            $table->boolean('is_dynamic')->default(false); // For :destination swap
            $table->string('author_name')->nullable(); //[cite: 8]
            $table->string('author_avatar')->nullable(); //[cite: 8]
            $table->string('meta_info')->nullable(); // "8 min read"[cite: 8]
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};

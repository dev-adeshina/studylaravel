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
        Schema::create('home_feature_destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "United Kingdom"
            $table->string('slug')->unique(); // For the "View Details" page
            $table->text('excerpt'); // The small blurb text
            $table->string('image_path'); 
            $table->integer('sort_order')->default(0);
            $table->boolean('is_featured')->default(true); // For the home carousel
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_feature_destinations');
    }
};

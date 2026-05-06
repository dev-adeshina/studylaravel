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
        Schema::create('about_feature_info_graphs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., "Global Network"
            $table->text('description'); // The paragraph text
            $table->string('icon_class')->default('fa-solid fa-earth-americas'); // FontAwesome class
            $table->integer('order')->default(0); // To control the grid display order
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_feature_info_graphs');
    }
};

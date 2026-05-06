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
        Schema::create('destination_feature_posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index(); 
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->longText('intro_text'); 
            $table->longText('schools_list'); 
            $table->string('cta_label')->default('Apply Now');
            $table->string('cta_route')->default('applicants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_feature_posts');
    }
};

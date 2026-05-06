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
        Schema::create('about_feature_stories', function (Blueprint $table) {
            $table->id();
            $table->string('eyebrow')->default('Our story');
            $table->string('title')->default('We’re just getting started');
            $table->text('body_text_one');
            $table->text('body_text_two')->nullable();
            $table->string('image_path')->default('images/about-us.jpg');
            $table->string('image_alt')->default('About us image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_feature_stories');
    }
};

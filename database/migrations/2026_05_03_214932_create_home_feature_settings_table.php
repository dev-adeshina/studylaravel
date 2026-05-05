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
        Schema::create('home_feature_settings', function (Blueprint $table) {
            $table->id();
            $table->string('section_key')->unique(); // e.g., "destinations_header"
            $table->string('eyebrow')->nullable(); // "Global Reach"
            $table->string('title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_feature_settings');
    }
};

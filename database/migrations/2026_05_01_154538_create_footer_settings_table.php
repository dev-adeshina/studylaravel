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
        Schema::create('footer_settings', function (Blueprint $table) {
            $table->id();
            $table->text('slogan')->nullable();
            $table->string('newsletter_title')->nullable(); 
            $table->text('newsletter_description')->nullable(); 
            $table->string('copyright_text')->nullable(); 
            $table->string('designer_name')->nullable(); 
            $table->string('designer_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_settings');
    }
};

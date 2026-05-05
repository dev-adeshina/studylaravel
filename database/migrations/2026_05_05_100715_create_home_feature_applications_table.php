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
        Schema::create('home_feature_applications', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('image_alt')->default('Prospective student');
            $table->boolean('show_form')->default(true);
            $table->string('form_type')->default('applicant-form');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_feature_applications');
    }
};

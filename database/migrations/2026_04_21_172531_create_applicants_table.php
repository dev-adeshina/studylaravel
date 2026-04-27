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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('age');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('gender');
            
            $table->string('preferred_study_destination'); 
            $table->string('other_countries_interested'); 
            
            $table->string('program_interested'); 
            $table->string('intake_period'); 

            $table->string('highest_qualification'); 
            $table->string('other_qualification')->nullable(); 
            
            $table->string('previous_visa_refusal'); 
            $table->string('referral_source'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'age',
        'phone_number',
        'email',
        'gender',
        'preferred_study_destination',
        'other_countries_interested',
        'program_interested',
        'intake_period',
        'highest_qualification',
        'other_qualification',
        'previous_visa_refusal',
        'referral_source',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'age' => 'integer',
        'created_at' => 'datetime',
    ];

    /**
     * Scope a query to only include applicants for a specific intake.
     * Example: Applicant::intake('2026')->get();
     */
    public function scopeIntake($query, $year)
    {
        return $query->where('intake_period', 'LIKE', "%{$year}%");
    }

    /**
     * Accessor to get a formatted phone number (optional).
     */
    public function getPhoneNumberFormattedAttribute()
    {
        // Example: logic to clean or format the +234 number
        return trim($this->phone_number);
    }
}

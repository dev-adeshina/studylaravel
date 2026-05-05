<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeatureTestimonial extends Model
{
    //
    protected $fillable = [
        'name',
        'school',
        'country',
        'stars',
        'video_url',
    ];
}

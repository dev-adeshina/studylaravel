<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationFeaturePost extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'intro_text',
        'schools_list',
        'cta_label',
        'cta_route',
        'image_path',
    ];

}

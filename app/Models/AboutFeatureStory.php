<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutFeatureStory extends Model
{
    //

    protected $fillable = [
        'eyebrow',
        'title',
        'body_text_one',
        'body_text_two',
        'image_path',
        'image_alt'
    ];
}

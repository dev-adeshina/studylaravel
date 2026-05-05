<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeatureSetting extends Model
{
    //
    protected $fillable = [
        'section_key', 
        'eyebrow', 
        'title'
    ];
}

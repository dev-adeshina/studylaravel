<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeatureDestination extends Model
{
    //

    protected $fillable = [
        'name',
        'slug',
        'excerpt',
        'image_path',
        'sort_order',
        'is_featured',
        'is_active',
    ];
}

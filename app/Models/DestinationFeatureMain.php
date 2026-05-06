<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationFeatureMain extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'slug',
        'is_active',
        'sort_order',
    ];
}

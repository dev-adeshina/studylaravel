<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeatureExpertise extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'title',
        'description',
        'icon_class',
        'sort_order',
        'is_visible',
    ];

    // Casts help ensure data types are correct when used in Blade
    protected $casts = [
        'is_visible' => 'boolean',
        'sort_order' => 'integer',
    ];
}

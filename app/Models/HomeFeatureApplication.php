<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeFeatureApplication extends Model
{
    protected $fillable = [
        
        'image_path',
        'image_alt',
        'show_form',
        'form_type',
        
    ];

    /**
     * Helper to get the full URL of the image
     */
    public function getImageUrlAttribute()
    {
        return asset($this->image_path);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutFeatureInfoGraph extends Model
{
    protected $fillable = ['title', 'description', 'icon_class', 'order', 'is_active'];
}

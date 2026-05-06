<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqFeatureMain extends Model
{
    protected $fillable = ['title', 'content', 'is_active', 'sort_order'];
}

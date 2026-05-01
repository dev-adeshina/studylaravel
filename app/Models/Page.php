<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    protected $fillable = [
        'title',
        'slug',
        'layout',
        'content',
        'meta_description',
        'is_published'
    ];
}

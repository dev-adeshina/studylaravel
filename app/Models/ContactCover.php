<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactCover extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'public_email'
    ];
}

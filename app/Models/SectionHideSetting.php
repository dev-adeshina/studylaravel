<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionHideSetting extends Model
{
    //

    protected $fillable = ['key', 'is_visible'];

    // Helper to quickly check visibility in Blade
    public static function isVisible($key)
    {
        return self::where('key', $key)->value('is_visible') ?? false;
    }
}

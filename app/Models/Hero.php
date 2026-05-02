<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    //
    protected $guarded = [];

    /**
     * Get the title with dynamic replacement if applicable.
     */
    public function getDynamicTitle($replacement = null)
    {
        if ($this->is_dynamic && $replacement) {
            return str_replace(':destination', $replacement, $this->title);
        }
        return $this->title;
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FooterSetting;

class Copyright extends Component
{
    public string $copyrightText;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->copyrightText = FooterSetting::first()->copyright_text ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.copyright');
    }
}

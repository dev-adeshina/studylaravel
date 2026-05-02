<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HeaderLink;
use App\Models\HeaderSetting;

class HeaderMenu extends Component
{
    public object $navLink;
    public object $headerSettings;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //

        $this->navLink = HeaderLink::all() ?? null;
        $this->headerSettings = HeaderSetting::first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-menu');
    }
}

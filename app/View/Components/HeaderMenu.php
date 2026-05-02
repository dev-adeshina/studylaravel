<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HeaderLink;

class HeaderMenu extends Component
{
    public object $navLink;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //

        $this->navLink = HeaderLink::all() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-menu');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\QuickLink as Link;

class QuickLink extends Component
{
    public object $links;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->links = Link::orderBy('sort_order', 'asc')->get() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.quick-link');
    }
}

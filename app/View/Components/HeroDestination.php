<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Hero;

class HeroDestination extends Component
{
    public object $hero;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->hero = Hero::where('page_key', 'destination')->first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-destination');
    }
}

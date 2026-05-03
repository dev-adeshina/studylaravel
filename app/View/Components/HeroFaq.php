<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Hero;

class HeroFaq extends Component
{
    public object $hero;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->hero = Hero::where('page_key', 'faq')->first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-faq');
    }
}

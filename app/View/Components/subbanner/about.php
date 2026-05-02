<?php

namespace App\View\Components\subbanner;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Hero;

class about extends Component
{
    public string $hero;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->hero = Hero::where('page_key', 'blog')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sub-banner.about');
    }
}

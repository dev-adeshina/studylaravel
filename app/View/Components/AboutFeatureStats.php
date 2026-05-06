<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AboutFeatureStat;

class AboutFeatureStats extends Component
{

    public object $stats;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->stats = AboutFeatureStat::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-feature-stats');
    }
}

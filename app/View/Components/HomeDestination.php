<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HomeFeatureSetting;
use App\Models\HomeFeatureDestination;

class HomeDestination extends Component
{
    public object $destinations;
    public object $settings;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->settings = HomeFeatureSetting::where('section_key', 'destinations')->first() ?? null;
        $this->destinations = HomeFeatureDestination::where('is_active', true)->get() ?? null;
        // 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-destination');
    }
}

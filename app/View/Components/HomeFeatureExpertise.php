<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FeatureExpertise;
use App\Models\HomeFeatureSetting;
    
class HomeFeatureExpertise extends Component
{
    public object $featureExpertise;
    public object $settings;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->featureExpertise = FeatureExpertise::all() ?? null;
        $this->settings = HomeFeatureSetting::where('section_key', 'expertises')->first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-feature-expertise');
    }
}

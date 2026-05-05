<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HomeFeatureApplication as HomeFeatureApplicationModel;
use App\Models\HomeFeatureSetting;

class HomeFeatureApplication extends Component
{

    public object $settings;
    public object $applicationSetting;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //

        $this->settings = HomeFeatureSetting::where('section_key', 'application')->first() ?? null;
        $this->applicationSetting = HomeFeatureApplicationModel::first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-feature-application');
    }
}

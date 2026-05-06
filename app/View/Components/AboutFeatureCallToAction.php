<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AboutFeatureCallToAction as AboutFeature;

class AboutFeatureCallToAction extends Component
{
    public object $callToAction;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->callToAction = AboutFeature::first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-feature-call-to-action');
    }
}

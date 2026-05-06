<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ServiceFeatureMain as MainService;

class ServiceFeatureMain extends Component
{
    public object $mainFeatures;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->mainFeatures = MainService::all() ?? null;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-feature-main');
    }
}

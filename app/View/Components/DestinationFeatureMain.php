<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\DestinationFeatureMain as DestinationFeatureMainModel;

class DestinationFeatureMain extends Component
{
    public object $travels;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->travels = DestinationFeatureMainModel::where('is_active', true)->orderBy('sort_order')->get() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.destination-feature-main');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AboutFeatureInfoGraph as AboutFeatureInfoGraphModel;

class AboutFeatureInfoGraph extends Component
{
    public object $infoGraph;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->infoGraph = AboutFeatureInfoGraphModel::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-feature-info-graph');
    }
}

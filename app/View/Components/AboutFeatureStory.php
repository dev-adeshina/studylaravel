<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AboutFeatureStory as ModelsAboutFeatureStory;

class AboutFeatureStory extends Component
{
    public object $story;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->story = ModelsAboutFeatureStory::first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-feature-story');
    }
}

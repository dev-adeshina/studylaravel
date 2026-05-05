<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HomeFeatureSetting;
use App\Models\SectionHideSetting;

class HomeFeatureBlog extends Component
{
    public object $settings;
    public bool $isVisible;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->settings = HomeFeatureSetting::where('section_key', 'blog')->first() ?? null;
        $this->isVisible = SectionHideSetting::where('key', 'home_blog')->first()->is_visible;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-feature-blog');
    }
}

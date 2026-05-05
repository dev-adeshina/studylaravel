<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\HomeFeatureSetting;
use App\Models\HomeFeatureTestimonial as HomeFeatureTestimonialModel;


class HomeFeatureTestimonial extends Component
{
    public object $settings;
    public object $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->settings = HomeFeatureSetting::where('section_key', 'testimonials')->first() ?? null;
        $this->testimonials = HomeFeatureTestimonialModel::all() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-feature-testimonial');
    }
}

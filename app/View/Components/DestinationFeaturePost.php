<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\DestinationFeaturePost as Destination;


class DestinationFeaturePost extends Component
{
    public object $slugs;
    /**
     * Create a new component instance.
     */
    public function __construct(string $slug)
    {
        $this->slugs = Destination::where('slug', $slug)->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.destination-feature-post');
    }
}

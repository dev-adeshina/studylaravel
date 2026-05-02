<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\SocialLink;

class SocialLinks extends Component
{
    public object $socialLinks;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->socialLinks = SocialLink::get() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.social-links');
    }
}

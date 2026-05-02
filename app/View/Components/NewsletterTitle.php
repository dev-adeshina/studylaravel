<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FooterSetting;

class NewsletterTitle extends Component
{
    public string $title;  
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->title = FooterSetting::first()->newsletter_title ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.newsletter-title');
    }
}

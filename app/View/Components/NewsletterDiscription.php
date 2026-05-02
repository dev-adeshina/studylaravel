<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FooterSetting;

class NewsletterDiscription extends Component
{
    public string $description;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->description = FooterSetting::first()->newsletter_description ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.newsletter-discription');
    }
}

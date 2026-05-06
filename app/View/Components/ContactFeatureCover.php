<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ContactCover;

class ContactFeatureCover extends Component
{
    public object $contactCover;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->contactCover = ContactCover::first() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-feature-cover');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FaqFeatureMain as FaqMain;

class FaqFeatureMain extends Component
{
    public object $faqs;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->faqs = FaqMain::all() ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faq-feature-main');
    }
}

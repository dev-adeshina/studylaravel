<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Logo;

class FooterLogo extends Component
{
    public string $footerLogo;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->footerLogo = Logo::first()->footer_path ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-logo');
    }
}

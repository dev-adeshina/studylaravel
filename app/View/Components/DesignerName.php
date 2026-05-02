<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FooterSetting;

class DesignerName extends Component
{
    public string $name;
    public string $url;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $links = FooterSetting::first() ?? '';
        $this->name = $links->designer_name ?? '';
        $this->url = $links->designer_url ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.designer-name');
    }
}

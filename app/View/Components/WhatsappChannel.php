<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\WhatsappChannel as Channel;

class WhatsappChannel extends Component
{
    public string $heading;
    public string $subHeading;
    public string $representative;
    public string $welcomeMessage;
    public string $callToAction;
    public string $phoneNumber;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $whatsapp = Channel::first() ?? null;
        $this->heading = $whatsapp->heading ?? '';
        $this->subHeading = $whatsapp->sub_heading ?? '';
        $this->representative = $whatsapp->representative ?? '';
        $this->welcomeMessage = $whatsapp->welcome_message ?? '';
        $this->callToAction = $whatsapp->call_to_action ?? '';
        $this->phoneNumber = $whatsapp->phone_number ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.whatsapp-channel');
    }
}

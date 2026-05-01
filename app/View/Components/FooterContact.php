<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\FooterContact as Contact;

class FooterContact extends Component
{
    public string $officeAddress;
    public string $phoneNumber;
    public string $email;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $contacts = Contact::first();
        $this->officeAddress = $contacts->office_address ?? '';
        $this->phoneNumber = $contacts->phone_number ?? '';
        $this->email = $contacts->email ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-contact');
    }
}

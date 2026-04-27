<?php

namespace App\Enums;

enum SubscriberState: string
{
     case PENDING = 'pending';
     case ACTIVE = 'active';
     case UNSUBSCRIBED =  'unsubscribed';
     case SIGNUP_FOOTER_SOURCE = 'Newsletter Footer';
     case SIGNUP_APPLICATION_SOURCE = 'Visa Application Form';
}

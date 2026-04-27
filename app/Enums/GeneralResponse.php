<?php

namespace App\Enums;

enum GeneralResponse: string
{
     case PENDING = 'pending';
     case ACTIVE = 'active';
     case UNSUBSCRIBED =  'unsubscribed';
}

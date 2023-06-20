<?php

namespace App\Enums;

enum SubscriptionType: string {
    case Normal = 'normal';
    case Silver = 'silver';
    case Golden = 'golden';
}

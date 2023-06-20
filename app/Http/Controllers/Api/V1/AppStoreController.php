<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\SubscriptionStatus;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;

class AppStoreController extends Controller
{
    public function checkSubscriptionStatus(Subscription $subscription)
    {
        Log::alert('app store controller');
        $subscription->update([
            'status' => Arr::random(SubscriptionStatus::cases()),
        ]);
        // make a situation for mock service subscription status checker if failed or success
        $responseStatus = Arr::random([200,500]);
        // if failed
        if($responseStatus !== 200 ) {
            return response()->json([
                'message' => 'Something went wrong,please try again later.',
            ],$responseStatus);
        }
        // if success
        return response()->json([
            'subscription' => $subscription->status->value,
        ],$responseStatus);
    }
}

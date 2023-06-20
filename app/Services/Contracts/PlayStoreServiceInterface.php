<?php

namespace App\Services\Contracts;

use App\Models\Subscription;
use App\Services\PlayStoreService;
use Illuminate\Http\Client\Response;

interface PlayStoreServiceInterface
{
    /**
     * Specific subscription
     * @param Subscription $subscription
     * @return PlayStoreService
     */
    public function fromSubscription(Subscription $subscription): PlayStoreService;

    /**
     * Check subscription status which define in `fromSubscription`
     * @return PlayStoreService
     */
    public function checkSubscriptionStatus(): PlayStoreService;

    /**
     * Get the http response
     * @return Response
     */
    public function getResponse(): Response;
}

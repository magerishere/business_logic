<?php

namespace App\Services\Contracts;

use App\Models\Subscription;
use App\Services\AppStoreService;
use Illuminate\Http\Client\Response;

interface AppStoreServiceInterface
{
    /**
     * Specific subscription
     * @param Subscription $subscription
     * @return AppStoreService
     */
    public function fromSubscription(Subscription $subscription): AppStoreService;

    /**
     * Check subscription status which define in `fromSubscription`
     * @return AppStoreService
     */
    public function checkSubscriptionStatus(): AppStoreService;

    /**
     * Get the http response
     * @return Response
     */
    public function getResponse(): Response;
}

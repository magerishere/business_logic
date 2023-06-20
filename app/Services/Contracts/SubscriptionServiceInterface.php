<?php

namespace App\Services\Contracts;

use App\Services\SubscriptionService;
use Illuminate\Database\Eloquent\Builder;

interface SubscriptionServiceInterface
{
    /**
     * Get Latest Modified query
     * @return Builder
     */
    public function getQuery(): Builder;

    /**
     * Get expired subscriptions by date
     * @return SubscriptionService
     */
    public function whereExpired(): SubscriptionService;

    /**
     * Get subscriptions active status
     * @return SubscriptionService
     */
    public function whereStatusIsActive(): SubscriptionService;
    /**
     * Get subscriptions active pending
     * @return SubscriptionService
     */
    public function whereStatusIsPending(): SubscriptionService;
    /**
     * Get subscriptions active expired
     * @return SubscriptionService
     */
    public function whereStatusIsExpired(): SubscriptionService;

    /**
     * Only subscriptions in play store
     * @return SubscriptionService
     */
    public function whereMarketPlayStore(): SubscriptionService;

    /**
     * Only subscriptions in play store
     * @return SubscriptionService
     */
    public function whereMarketAppStore(): SubscriptionService;
}

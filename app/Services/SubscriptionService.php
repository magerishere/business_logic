<?php

namespace App\Services;

use App\Enums\SubscriptionMarket;
use App\Enums\SubscriptionStatus;
use App\Models\Subscription;
use App\Services\Contracts\SubscriptionServiceInterface;
use Illuminate\Database\Eloquent\Builder;

class SubscriptionService implements SubscriptionServiceInterface
{
    public function __construct(private Builder $query)
    {
        $this->query = Subscription::query();
    }

    public function getQuery(): Builder
    {
        return $this->query;
    }

    public function whereExpired(): SubscriptionService
    {
        $this->query->whereColumn('updated_at','>=','expire_at');
        return $this;
    }


    public function whereStatusIsActive(): SubscriptionService
    {
        $this->query->where('status',SubscriptionStatus::Active);
        return $this;
    }

    public function whereStatusIsPending(): SubscriptionService
    {
        $this->query->where('status',SubscriptionStatus::Pending);
        return $this;
    }

    public function whereStatusIsExpired(): SubscriptionService
    {
        $this->query->where('status',SubscriptionStatus::Expired);
        return $this;
    }

    public function whereMarketPlayStore(): SubscriptionService
    {
        $this->query->where('market',SubscriptionMarket::PlayStore);
        return $this;
    }

    public function whereMarketAppStore(): SubscriptionService
    {
        $this->query->where('market',SubscriptionMarket::AppStore);
        return $this;
    }


}

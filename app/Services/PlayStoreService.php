<?php

namespace App\Services;

use App\Models\Subscription;
use App\Services\Contracts\PlayStoreServiceInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PlayStoreService implements PlayStoreServiceInterface
{
    const API_PATH = 'http://business_logic.test/api/v1/play-store/subscriptions/%s/check-status';
    protected Subscription $subscription;
    protected Response $response;

    private function getApiPath(): string
    {
        return sprintf(self::API_PATH,$this->subscription->id);
    }

    /**
     * @param Subscription $subscription
     * @return $this
     */
    public function fromSubscription(Subscription $subscription): PlayStoreService
    {
        $this->subscription = $subscription;
        return $this;
    }

    public function checkSubscriptionStatus(): PlayStoreService
    {
        $response = Http::get($this->getApiPath());
        $this->response = $response;
        return $this;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }

}

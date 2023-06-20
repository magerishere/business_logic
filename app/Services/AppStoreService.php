<?php

namespace App\Services;

use App\Models\Subscription;
use App\Services\Contracts\AppStoreServiceInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class AppStoreService implements AppStoreServiceInterface
{
    const API_PATH = 'http://business_logic.test/api/v1/app-store/subscriptions/%s/check-status';
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
    public function fromSubscription(Subscription $subscription): AppStoreService
    {
        $this->subscription = $subscription;
        return $this;
    }

    public function checkSubscriptionStatus(): AppStoreService
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

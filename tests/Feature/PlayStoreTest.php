<?php

namespace Tests\Feature;

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class PlayStoreTest extends TestCase
{

    public function test_mock_http_service_for_check_subscription_status_exists(): void
    {
        $subscription = User::factory()->create()->subs->first();
        $response = $this->get(route('api.v1.play-store.subscriptions-subscription.check-status',$subscription->id));

        $this->assertTrue($response->status() !== Response::HTTP_NOT_FOUND);
    }

    public function test_mock_http_service_for_check_response_content_when_succeed_or_failed()
    {
        $subscription = User::factory()->create()->subs->first();
        $response = $this->get(route('api.v1.play-store.subscriptions-subscription.check-status',$subscription->id));
        $resStatus = $response->status();
        if($resStatus === Response::HTTP_INTERNAL_SERVER_ERROR) {
            $response->assertServerError()->assertJsonStructure([
                'message',
            ]);
        } else if ($resStatus === Response::HTTP_OK) {
            $response->assertOk()->assertJsonStructure([
               'status',
            ]);
        }
    }



}

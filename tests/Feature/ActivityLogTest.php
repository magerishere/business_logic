<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\ActivityLogService;
use Tests\TestCase;

class ActivityLogTest extends TestCase
{
    public function test_activity_log_subscriptions_expired_route_exists(): void
    {
        $response = $this->get(route('api.v1.activity-log.subscriptions.expired'));

        $response->assertOk();
    }

    public function test_activity_log_subscriptions_expired_json_structure_must_same_activity_log_collection(): void
    {
        $subscription = User::factory()->create()->subs->first();
        app(ActivityLogService::class)->expiredSubscriptionLog($subscription)->setLog('Testing Log');
        $response = $this->get(route('api.v1.activity-log.subscriptions.expired'));
        $response->assertOk()->assertJsonStructure([
            'count',
            'data' => [
                '*' => [
                    '*' => [
                        'id',
                        'log_name',
                        'description',
                        'created_at',
                        'user' => [
                            'id',
                            'name',
                            'email'
                        ],
                        'subscription' => [
                            'id',
                            'type',
                            'status',
                            'market',
                            'expire_at',
                            'created_at',
                            'updated_at',
                        ],
                        'properties' => [
                            'status',
                            'type',
                            'expire_at',
                            'updated_at'
                        ],
                    ],
                ],
            ],
        ]);
    }

}

<?php

namespace Database\Factories;

use App\Enums\SubscriptionMarket;
use App\Enums\SubscriptionStatus;
use App\Enums\SubscriptionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'user_id',
            'type' => $this->faker->randomElement(SubscriptionType::cases()),
            // 'market',
            'status' => $this->faker->randomElement(SubscriptionStatus::cases()),
            'price' => $this->faker->randomFloat(2,10,1000), // between 10.00 - 1000.00 dollar
            'expire_at' => now()->addDays(30 * $this->faker->numberBetween(-10,24)), // Almost between 1-24 month(s) or can be expired
        ];
    }
}

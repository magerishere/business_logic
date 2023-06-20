<?php

namespace Database\Factories;

use App\Enums\SubscriptionMarket;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function configure()
    {
        return $this->afterCreating(function(User $user) {
            $markets = SubscriptionMarket::cases();
            $markets = $this->faker->randomElements($markets,$this->faker->numberBetween(1,count($markets)));
            foreach ($markets as $market) {
                $subscription = Subscription::factory()->make([
                    'market' => $market->value,
                ]);
                $user->subs()->updateOrCreate([
                    'market' => $market->value,
                ],$subscription->attributesToArray());
            }
        });
    }
}

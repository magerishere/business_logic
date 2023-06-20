<?php

namespace Database\Factories;

use App\Enums\Platforms;
use App\Models\App;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class AppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $platformId = $this->faker->randomElement(Platforms::cases());

        return [
             'id' => $this->getRandomAppIdDependsOnPlatform($platformId),
             'platform_id' => $platformId->value,
             'name' => $this->faker->word,
        ];
    }

    /**
     * Generate a fake app id depends on platform
     * @param Platforms $platform
     * @return string
     */
    private function getRandomAppIdDependsOnPlatform(Platforms $platform): string
    {
        $appId = $this->faker->regexify('[A-Za-z0-9]{20}'); // fake app id for android ex: CLZzB2aypnUGJg7GMsaq
        if($platform === Platforms::IOS) {
            $appId = $this->faker->uuid(); // fake app id for ios ex: ba296f0d-64b5-3a9a-9490-d4b50c59fb23
        }
        // ensure does not have duplicate app id.
        if(App::find($appId)) {
            return $this->getRandomAppIdDependsOnPlatform($platform);
        }
        return $appId;
    }
}

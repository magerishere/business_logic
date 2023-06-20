<?php //9487bcf6441a9976ce26c5e8ecddc610
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @method $this forPlatform($attributes = [])
     */
    class AppFactory extends Factory {}

    /**
     * @method $this hasApps(int $count = 1, $attributes = [])
     */
    class PlatformFactory extends Factory {}

    /**
     * @method $this forUser($attributes = [])
     */
    class SubscriptionFactory extends Factory {}

    /**
     * @method $this hasNotifications(int $count = 1, $attributes = [])
     * @method $this hasReadNotifications(int $count = 1, $attributes = [])
     * @method $this hasSubs(int $count = 1, $attributes = [])
     * @method $this hasTokens(int $count = 1, $attributes = [])
     * @method $this hasUnreadNotifications(int $count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}

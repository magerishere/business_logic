<?php //084bd0c757af8becaecb30171549e3a7
/** @noinspection all */

namespace App\Models {

    use App\Enums\Platforms;
    use App\Enums\SubscriptionMarket;
    use App\Enums\SubscriptionStatus;
    use App\Enums\SubscriptionType;
    use Database\Factories\AppFactory;
    use Database\Factories\PlatformFactory;
    use Database\Factories\SubscriptionFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_App_C;
    use LaravelIdea\Helper\App\Models\_IH_App_QB;
    use LaravelIdea\Helper\App\Models\_IH_Platform_C;
    use LaravelIdea\Helper\App\Models\_IH_Platform_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_C;
    use LaravelIdea\Helper\App\Models\_IH_Subscription_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;

    /**
     * @property string $id
     * @property Platforms $platform_id
     * @property string $name
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Platform $platform
     * @method BelongsTo|_IH_Platform_QB platform()
     * @method static _IH_App_QB onWriteConnection()
     * @method _IH_App_QB newQuery()
     * @method static _IH_App_QB on(null|string $connection = null)
     * @method static _IH_App_QB query()
     * @method static _IH_App_QB with(array|string $relations)
     * @method _IH_App_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_App_C|App[] all()
     * @ownLinks platform_id,\App\Models\Platform,id
     * @mixin _IH_App_QB
     * @method static AppFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class App extends Model {}

    /**
     * @property Platforms $id
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_App_C|App[] $apps
     * @property-read int $apps_count
     * @method HasMany|_IH_App_QB apps()
     * @method static _IH_Platform_QB onWriteConnection()
     * @method _IH_Platform_QB newQuery()
     * @method static _IH_Platform_QB on(null|string $connection = null)
     * @method static _IH_Platform_QB query()
     * @method static _IH_Platform_QB with(array|string $relations)
     * @method _IH_Platform_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Platform_C|Platform[] all()
     * @foreignLinks id,\App\Models\App,platform_id
     * @mixin _IH_Platform_QB
     * @method static PlatformFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Platform extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property SubscriptionType $type
     * @property SubscriptionMarket $market
     * @property SubscriptionStatus $status
     * @property float $price
     * @property Carbon $expire_at
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Subscription_QB onWriteConnection()
     * @method _IH_Subscription_QB newQuery()
     * @method static _IH_Subscription_QB on(null|string $connection = null)
     * @method static _IH_Subscription_QB query()
     * @method static _IH_Subscription_QB with(array|string $relations)
     * @method _IH_Subscription_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscription_C|Subscription[] all()
     * @ownLinks user_id,\App\Models\User,id
     * @mixin _IH_Subscription_QB
     * @method static SubscriptionFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class Subscription extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property mixed $password
     * @property string|null $remember_token
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Subscription_C|Subscription[] $subs
     * @property-read int $subs_count
     * @method HasMany|_IH_Subscription_QB subs()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\App\Models\Subscription,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}

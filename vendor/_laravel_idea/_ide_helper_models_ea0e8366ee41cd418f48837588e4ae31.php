<?php //4e06f357bcbf393de96354c208b27916
/** @noinspection all */

namespace Spatie\Activitylog\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\Spatie\Activitylog\Models\_IH_Activity_C;
    use LaravelIdea\Helper\Spatie\Activitylog\Models\_IH_Activity_QB;

    /**
     * @property-read Collection $changes attribute
     * @property Model $causer
     * @method MorphTo causer()
     * @property Model $subject
     * @method MorphTo subject()
     * @method static _IH_Activity_QB onWriteConnection()
     * @method _IH_Activity_QB newQuery()
     * @method static _IH_Activity_QB on(null|string $connection = null)
     * @method static _IH_Activity_QB query()
     * @method static _IH_Activity_QB with(array|string $relations)
     * @method _IH_Activity_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Activity_C|Activity[] all()
     * @mixin _IH_Activity_QB
     */
    class Activity extends Model {}
}

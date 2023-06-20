<?php //2eef3201d51cf760f069b35041882ffc
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\App;
    use App\Models\Platform;
    use App\Models\Subscription;
    use App\Models\User;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method App|null getOrPut($key, \Closure $value)
     * @method App|$this shift(int $count = 1)
     * @method App|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method App|$this pop(int $count = 1)
     * @method App|null pull($key, \Closure $default = null)
     * @method App|null last(callable $callback = null, \Closure $default = null)
     * @method App|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method App|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method App|null get($key, \Closure $default = null)
     * @method App|null first(callable $callback = null, \Closure $default = null)
     * @method App|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method App|null find($key, $default = null)
     * @method App[] all()
     */
    class _IH_App_C extends _BaseCollection {
        /**
         * @param int $size
         * @return App[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_App_QB whereId($value)
     * @method _IH_App_QB wherePlatformId($value)
     * @method _IH_App_QB whereName($value)
     * @method _IH_App_QB whereDeletedAt($value)
     * @method _IH_App_QB whereCreatedAt($value)
     * @method _IH_App_QB whereUpdatedAt($value)
     * @method App baseSole(array|string $columns = ['*'])
     * @method App create(array $attributes = [])
     * @method _IH_App_C|App[] cursor()
     * @method App|null|_IH_App_C|App[] find($id, array|string $columns = ['*'])
     * @method _IH_App_C|App[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method App|_IH_App_C|App[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method App|_IH_App_C|App[] findOrFail($id, array|string $columns = ['*'])
     * @method App|_IH_App_C|App[] findOrNew($id, array|string $columns = ['*'])
     * @method App first(array|string $columns = ['*'])
     * @method App firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method App firstOrCreate(array $attributes = [], array $values = [])
     * @method App firstOrFail(array|string $columns = ['*'])
     * @method App firstOrNew(array $attributes = [], array $values = [])
     * @method App firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method App forceCreate(array $attributes)
     * @method App forceCreateQuietly(array $attributes = [])
     * @method _IH_App_C|App[] fromQuery(string $query, array $bindings = [])
     * @method _IH_App_C|App[] get(array|string $columns = ['*'])
     * @method App getModel()
     * @method App[] getModels(array|string $columns = ['*'])
     * @method _IH_App_C|App[] hydrate(array $items)
     * @method App make(array $attributes = [])
     * @method App newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|App[]|_IH_App_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|App[]|_IH_App_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method App sole(array|string $columns = ['*'])
     * @method App updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_App_QB extends _BaseBuilder {}

    /**
     * @method Platform|null getOrPut($key, \Closure $value)
     * @method Platform|$this shift(int $count = 1)
     * @method Platform|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Platform|$this pop(int $count = 1)
     * @method Platform|null pull($key, \Closure $default = null)
     * @method Platform|null last(callable $callback = null, \Closure $default = null)
     * @method Platform|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Platform|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Platform|null get($key, \Closure $default = null)
     * @method Platform|null first(callable $callback = null, \Closure $default = null)
     * @method Platform|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Platform|null find($key, $default = null)
     * @method Platform[] all()
     */
    class _IH_Platform_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Platform[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Platform_QB whereId($value)
     * @method _IH_Platform_QB whereDeletedAt($value)
     * @method _IH_Platform_QB whereCreatedAt($value)
     * @method _IH_Platform_QB whereUpdatedAt($value)
     * @method Platform baseSole(array|string $columns = ['*'])
     * @method Platform create(array $attributes = [])
     * @method _IH_Platform_C|Platform[] cursor()
     * @method Platform|null|_IH_Platform_C|Platform[] find($id, array|string $columns = ['*'])
     * @method _IH_Platform_C|Platform[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Platform|_IH_Platform_C|Platform[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Platform|_IH_Platform_C|Platform[] findOrFail($id, array|string $columns = ['*'])
     * @method Platform|_IH_Platform_C|Platform[] findOrNew($id, array|string $columns = ['*'])
     * @method Platform first(array|string $columns = ['*'])
     * @method Platform firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Platform firstOrCreate(array $attributes = [], array $values = [])
     * @method Platform firstOrFail(array|string $columns = ['*'])
     * @method Platform firstOrNew(array $attributes = [], array $values = [])
     * @method Platform firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Platform forceCreate(array $attributes)
     * @method Platform forceCreateQuietly(array $attributes = [])
     * @method _IH_Platform_C|Platform[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Platform_C|Platform[] get(array|string $columns = ['*'])
     * @method Platform getModel()
     * @method Platform[] getModels(array|string $columns = ['*'])
     * @method _IH_Platform_C|Platform[] hydrate(array $items)
     * @method Platform make(array $attributes = [])
     * @method Platform newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Platform[]|_IH_Platform_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Platform[]|_IH_Platform_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Platform sole(array|string $columns = ['*'])
     * @method Platform updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Platform_QB extends _BaseBuilder {}

    /**
     * @method Subscription|null getOrPut($key, \Closure $value)
     * @method Subscription|$this shift(int $count = 1)
     * @method Subscription|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Subscription|$this pop(int $count = 1)
     * @method Subscription|null pull($key, \Closure $default = null)
     * @method Subscription|null last(callable $callback = null, \Closure $default = null)
     * @method Subscription|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Subscription|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Subscription|null get($key, \Closure $default = null)
     * @method Subscription|null first(callable $callback = null, \Closure $default = null)
     * @method Subscription|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Subscription|null find($key, $default = null)
     * @method Subscription[] all()
     */
    class _IH_Subscription_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Subscription[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Subscription_QB whereId($value)
     * @method _IH_Subscription_QB whereUserId($value)
     * @method _IH_Subscription_QB whereType($value)
     * @method _IH_Subscription_QB whereMarket($value)
     * @method _IH_Subscription_QB whereStatus($value)
     * @method _IH_Subscription_QB wherePrice($value)
     * @method _IH_Subscription_QB whereExpireAt($value)
     * @method _IH_Subscription_QB whereDeletedAt($value)
     * @method _IH_Subscription_QB whereCreatedAt($value)
     * @method _IH_Subscription_QB whereUpdatedAt($value)
     * @method Subscription baseSole(array|string $columns = ['*'])
     * @method Subscription create(array $attributes = [])
     * @method _IH_Subscription_C|Subscription[] cursor()
     * @method Subscription|null|_IH_Subscription_C|Subscription[] find($id, array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrFail($id, array|string $columns = ['*'])
     * @method Subscription|_IH_Subscription_C|Subscription[] findOrNew($id, array|string $columns = ['*'])
     * @method Subscription first(array|string $columns = ['*'])
     * @method Subscription firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscription firstOrCreate(array $attributes = [], array $values = [])
     * @method Subscription firstOrFail(array|string $columns = ['*'])
     * @method Subscription firstOrNew(array $attributes = [], array $values = [])
     * @method Subscription firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Subscription forceCreate(array $attributes)
     * @method Subscription forceCreateQuietly(array $attributes = [])
     * @method _IH_Subscription_C|Subscription[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Subscription_C|Subscription[] get(array|string $columns = ['*'])
     * @method Subscription getModel()
     * @method Subscription[] getModels(array|string $columns = ['*'])
     * @method _IH_Subscription_C|Subscription[] hydrate(array $items)
     * @method Subscription make(array $attributes = [])
     * @method Subscription newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Subscription[]|_IH_Subscription_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Subscription[]|_IH_Subscription_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscription sole(array|string $columns = ['*'])
     * @method Subscription updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Subscription_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, \Closure $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereDeletedAt($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method User forceCreateQuietly(array $attributes = [])
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}

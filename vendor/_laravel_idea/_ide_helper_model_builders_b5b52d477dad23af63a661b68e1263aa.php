<?php //5bc9d849114787005faae05c450ca4ca
/** @noinspection all */

namespace LaravelIdea\Helper\Spatie\Activitylog\Models {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Activitylog\Models\Activity;

    /**
     * @method Activity|null getOrPut($key, \Closure $value)
     * @method Activity|$this shift(int $count = 1)
     * @method Activity|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Activity|$this pop(int $count = 1)
     * @method Activity|null pull($key, \Closure $default = null)
     * @method Activity|null last(callable $callback = null, \Closure $default = null)
     * @method Activity|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Activity|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Activity|null get($key, \Closure $default = null)
     * @method Activity|null first(callable $callback = null, \Closure $default = null)
     * @method Activity|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Activity|null find($key, $default = null)
     * @method Activity[] all()
     */
    class _IH_Activity_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Activity[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method Activity baseSole(array|string $columns = ['*'])
     * @method Activity create(array $attributes = [])
     * @method _IH_Activity_C|Activity[] cursor()
     * @method Activity|null|_IH_Activity_C|Activity[] find($id, array|string $columns = ['*'])
     * @method _IH_Activity_C|Activity[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Activity|_IH_Activity_C|Activity[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Activity|_IH_Activity_C|Activity[] findOrFail($id, array|string $columns = ['*'])
     * @method Activity|_IH_Activity_C|Activity[] findOrNew($id, array|string $columns = ['*'])
     * @method Activity first(array|string $columns = ['*'])
     * @method Activity firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Activity firstOrCreate(array $attributes = [], array $values = [])
     * @method Activity firstOrFail(array|string $columns = ['*'])
     * @method Activity firstOrNew(array $attributes = [], array $values = [])
     * @method Activity firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Activity forceCreate(array $attributes)
     * @method Activity forceCreateQuietly(array $attributes = [])
     * @method _IH_Activity_C|Activity[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Activity_C|Activity[] get(array|string $columns = ['*'])
     * @method Activity getModel()
     * @method Activity[] getModels(array|string $columns = ['*'])
     * @method _IH_Activity_C|Activity[] hydrate(array $items)
     * @method Activity make(array $attributes = [])
     * @method Activity newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Activity[]|_IH_Activity_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Activity[]|_IH_Activity_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Activity sole(array|string $columns = ['*'])
     * @method Activity updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Activity_QB causedBy(Model $causer)
     * @method _IH_Activity_QB forBatch(string $batchUuid)
     * @method _IH_Activity_QB forEvent(string $event)
     * @method _IH_Activity_QB forSubject(Model $subject)
     * @method _IH_Activity_QB hasBatch()
     * @method _IH_Activity_QB inLog(...$logNames)
     */
    class _IH_Activity_QB extends _BaseBuilder {}
}

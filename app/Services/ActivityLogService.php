<?php

namespace App\Services;

use App\Http\Resources\Api\V1\ActivityLogCollection;
use App\Models\Subscription;
use App\Services\Contracts\ActivityLogServiceInterface;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\ActivityLogger;
use Spatie\Activitylog\Models\Activity;

class ActivityLogService implements ActivityLogServiceInterface
{
    public function __construct(private ActivityLogger $activityLogger,private Builder $query)
    {
        $this->query = Activity::query();
    }
    public function getActivity(): ActivityLogger
    {
        return $this->activityLogger;
    }

    public function expiredSubscriptionLog(Subscription $subscription): ActivityLogService
    {
        $this->activityLogger
            ->performedOn($subscription)
            ->causedBy($subscription->user)
            ->withProperty('status', $subscription->status)
            ->withProperty('price',$subscription->price)
            ->withProperty('type',$subscription->type->value)
            ->withProperty('expire_at',$subscription->expire_at->format('Y-m-d H:i:s'))
            ->withProperty('updated_at',$subscription->updated_at->format('Y-m-d H:i:s'))
            ->inLog('expired_sub');

        return $this;
    }

    public function setLog(string $logMessage): void
    {
        $this->activityLogger->log($logMessage);
    }


    public function getQuery(): Builder
    {
        return $this->query;
    }

    public function whereLogNameExpiredSub(): ActivityLogService
    {
        $this->query->where('log_name','expired_sub');
        return $this;
    }

    public function orderByDesc(string $column = 'created_at'): ActivityLogService
    {
        $this->query->orderByDesc($column);
        return $this;
    }

    public function orderByAsc(string $column = 'created_at'): ActivityLogService
    {
        $this->query->orderBy($column);
        return $this;
    }

    public function getAsActivityLogCollection(): ActivityLogCollection
    {
        return new ActivityLogCollection($this->getQuery()->get());
    }

}

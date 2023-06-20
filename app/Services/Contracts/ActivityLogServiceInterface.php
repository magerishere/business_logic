<?php

namespace App\Services\Contracts;

use App\Http\Resources\Api\V1\ActivityLogCollection;
use App\Models\Subscription;
use App\Services\ActivityLogService;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\ActivityLogger;

interface ActivityLogServiceInterface
{
    /**
     * get instance of activity logger
     * @return ActivityLogger
     */
    public function getActivity(): ActivityLogger;

    /**
     * Set expired subscriptions logs
     * @param Subscription $subscription
     * @return ActivityLogService
     */
    public function expiredSubscriptionLog(Subscription $subscription): ActivityLogService;

    /**
     * Set Log message
     * @param string $logMessage
     * @return void
     */
    public function setLog(string $logMessage): void;

    /**
     * Get a query of activity eloquent
     * @return Builder
     */
    public function getQuery(): Builder;

    /**
     * Get logs where log_name is `expired_sub`
     * @return ActivityLogService
     */
    public function whereLogNameExpiredSub(): ActivityLogService;

    /**
     * Order by desc query which specific column
     * @param string $column
     * @return ActivityLogService
     */
    public function orderByDesc(string $column = 'created_at'): ActivityLogService;

    /**
     * Order by asc query which specific column
     * @param string $column
     * @return ActivityLogService
     */
    public function orderByAsc(string $column = 'created_at'): ActivityLogService;

    /**
     * Get result of query as activity log collection
     * @return ActivityLogCollection
     */
    public function getAsActivityLogCollection(): ActivityLogCollection;


}

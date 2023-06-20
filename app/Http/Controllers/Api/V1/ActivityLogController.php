<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ActivityLogCollection;
use App\Services\ActivityLogService;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function getExpiredSubscriptionsLogs(ActivityLogService $activityLogService)
    {
        return $activityLogService->whereLogNameExpiredSub()->getAsActivityLogCollection();
    }
}

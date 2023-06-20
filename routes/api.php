<?php

use App\Http\Controllers\Api\V1\ActivityLogController;
use App\Http\Controllers\Api\V1\AppStoreController;
use App\Http\Controllers\Api\V1\PlayStoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
*/
Route::prefix('v1')->as('v1.')->group(function() {
    Route::get('play-store/subscriptions/{subscription}/check-status',[PlayStoreController::class,'checkSubscriptionStatus'])->name('play-store.subscriptions-subscription.check-status');
    Route::get('app-store/subscriptions/{subscription}/check-status',[AppStoreController::class,'checkSubscriptionStatus'])->name('app-store.subscriptions-subscription.check-status');
    Route::get('activity-log/subscriptions/expired',[ActivityLogController::class,'getExpiredSubscriptionsLogs'])->name('activity-log.subscriptions.expired');
});

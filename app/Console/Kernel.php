<?php

namespace App\Console;

use App\Console\Commands\AppStoreSubscriptionsStatusChecker;
use App\Console\Commands\PlayStoreSubscriptionsStatusChecker;
use App\Enums\SubscriptionStatus;
use App\Services\SubscriptionService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        /* Command For Play Store Subscription Status Checker - START */
        $schedule->command(PlayStoreSubscriptionsStatusChecker::class,['expired_date'])
            ->weekly() // start at sunday 00:00
            ->appendOutputTo(storage_path('logs/play_store_subscriptions_status_checker_expired_date.log'))
            ->emailOutputTo(config('mail.from.address'))
            ->emailOutputOnFailure(config('mail.from.address'));

        $schedule->command(PlayStoreSubscriptionsStatusChecker::class,[SubscriptionStatus::Pending->value])
            ->weeklyOn(0,"01:00")// start at sunday 01:00
            ->hourly()
            ->appendOutputTo(storage_path('logs/play_store_subscriptions_status_checker_pending_status.log'))
            ->emailOutputTo(config('mail.from.address'))
            ->emailOutputOnFailure(config('mail.from.address'))
            ->skip(function(SubscriptionService $subscriptionService) {
                return $subscriptionService->whereStatusIsPending()->whereMarketPlayStore()->getQuery()->count() === 0;
            });

        /* Command For App Store Subscription Status Checker - START */
        $schedule->command(AppStoreSubscriptionsStatusChecker::class,['expired_date'])
            ->weekly() // start at sunday 00:00
            ->appendOutputTo(storage_path('logs/app_store_subscriptions_status_checker_expired_date.log'))
            ->emailOutputTo(config('mail.from.address'))
            ->emailOutputOnFailure(config('mail.from.address'));
        $schedule->command(AppStoreSubscriptionsStatusChecker::class,[SubscriptionStatus::Pending->value])
            ->weeklyOn(0,"02:00")// start at sunday 02:00
            ->everyTwoHours()
            ->appendOutputTo(storage_path('logs/app_store_subscriptions_status_checker_pending_status.log'))
            ->emailOutputTo(config('mail.from.address'))
            ->emailOutputOnFailure(config('mail.from.address'))
            ->skip(function(SubscriptionService $subscriptionService) {
                return $subscriptionService->whereStatusIsPending()->whereMarketAppStore()->getQuery()->count() === 0;
            });

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

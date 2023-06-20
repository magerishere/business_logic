<?php

namespace App\Console\Commands;

use App\Enums\SubscriptionStatus;
use App\Services\ActivityLogService;
use App\Services\MailService;
use App\Services\PlayStoreService;
use App\Services\SubscriptionService;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class PlayStoreSubscriptionsStatusChecker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'playstore:subs-check-status {status_value?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage subscriptions of play store';

    public function __construct(private PlayStoreService $playStoreService,private SubscriptionService $subscriptionService,private ActivityLogService $activityLogService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::alert($this->argument('status_value'));
        Log::alert('Play Store');
        match ($this->argument('status_value')) {
            SubscriptionStatus::Active->value => $this->activeStatus(),
            SubscriptionStatus::Pending->value => $this->pendingStatus(),
            SubscriptionStatus::Expired->value => $this->expiredStatus(),
            'expired_date' => $this->expiredDate(),
        };

    }

    /**
     * basic query needed for others method,only effect in subscriptions of play store
     * @return SubscriptionService
     */
    private function subscriptionOfPlayStore(): SubscriptionService
    {
        return $this->subscriptionService->whereMarketPlayStore();
    }

    /**
     * subscription which expired by date
     * @return void
     */
    private function expiredDate(): void
    {
        Log::alert('expired date');
        $this->statusChecker($this->subscriptionOfPlayStore()->whereExpired()->getQuery());
    }

    /**
     * subscription which status is active.
     * @return void
     */
    private function activeStatus(): void
    {
        Log::alert('active status');
        $this->statusChecker($this->subscriptionOfPlayStore()->whereStatusIsActive()->getQuery());
    }

    /**
     * Subscription which status is pending
     * @return void
     */
    private function pendingStatus(): void
    {
        Log::alert('pending status');
        $this->statusChecker($this->subscriptionOfPlayStore()->whereStatusIsPending()->getQuery());
    }

    /**
     * Subscription which status is expired
     * @return void
     */
    private function expiredStatus(): void
    {
        Log::alert('expired status');
        $this->statusChecker($this->subscriptionOfPlayStore()->whereStatusIsExpired()->getQuery());
    }

    /**
     * Check status subscriptions which filtered by top methods.
     * @param Builder $query
     * @return int
     */
    private function statusChecker(Builder $query)
    {
        // check status for all subscriptions which expired.
        $query->chunk(50,function(Collection $subscriptions) {
            foreach ($subscriptions as $subscription) {
                Log::alert("sub id is: $subscription->id");
                $res = $this->playStoreService->fromSubscription($subscription)->checkSubscriptionStatus()->getResponse();
                $resStatus = $res->status();

                if($resStatus !== 200) {
                    $subscription->update([
                        'status' => SubscriptionStatus::Pending,
                    ]);
                } else {
                    $resBody = json_decode($res->body(),true);
                    $resBodyStatus = $resBody['status'];
                    // if subscription status changed from active to expired
                    if($subscription->status->value === SubscriptionStatus::Active->value && $resBodyStatus === SubscriptionStatus::Expired->value) {
                        Log::alert("if subscription status changed from active to expired $subscription->id");
                        $mailService = new MailService(config('mail.from.address'));
                        $mailService->changeStatusSubscriptionsFromActiveToExpired($subscription)->sendMailsAsQueue();
                    }
                    $subscription->update([
                        'status' =>  $resBodyStatus,
                    ]);
                    $subscription->refresh();

                    if($subscription->status === SubscriptionStatus::Expired) {
                        $this->activityLogService->expiredSubscriptionLog($subscription)->setLog('subscription was expired');

                    }
                }
            }
            sleep(2);
        });
        return Command::SUCCESS;

    }
}

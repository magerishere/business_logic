<?php

namespace App\Services\Contracts;

use App\Models\Subscription;
use App\Services\MailService;

interface MailServiceInterface
{
    /**
     * Mail for changed subscription status from active to expired
     * @param Subscription $subscription
     * @return MailService
     */
    public function changeStatusSubscriptionsFromActiveToExpired(Subscription $subscription): MailService;

    /**
     * Send all mails
     * @return void
     */
    public function sendMails(): void;

    /**
     * Send all mails as queue
     * @return void
     */
    public function sendMailsAsQueue(): void;
}

<?php

namespace App\Services;

use App\Mail\SubscriptionsChangedStatusFromExpiredToActive;
use App\Models\Subscription;
use App\Services\Contracts\MailServiceInterface;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Facades\Mail;

class MailService implements MailServiceInterface
{
    private PendingMail $mail;
    private array $mailables = [];
    public function __construct(mixed $users)
    {
        $this->mail = Mail::to($users);
    }

    public function changeStatusSubscriptionsFromActiveToExpired(Subscription $subscription): MailService
    {
        $this->mailables[] = new SubscriptionsChangedStatusFromExpiredToActive($subscription);
        return $this;
    }

    public function sendMails(): void
    {
        foreach ($this->mailables as $mailable) {
            $this->mail->send($mailable);
        }
    }

    public function sendMailsAsQueue(): void
    {
        foreach ($this->mailables as $mailable) {
            $this->mail->queue($mailable);
        }
    }
}

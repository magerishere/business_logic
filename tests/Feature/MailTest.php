<?php

namespace Tests\Feature;

use App\Mail\SubscriptionsChangedStatusFromExpiredToActive;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class MailTest extends TestCase
{
    public function test_subscriptions_changed_status_from_expired_to_active_mail_content()
    {
        $user = User::factory()->create();
        $subscription = $user->subs->first();
        $mailable =  new SubscriptionsChangedStatusFromExpiredToActive($subscription);
        $mailable->assertSeeInHtml($subscription->id);
        $mailable->assertSeeInHtml($user->email);
        $mailable->assertSeeInHtml($subscription->market->value);
        $mailable->assertSeeInHtml($subscription->price);
        $mailable->assertSeeInHtml($subscription->type->value);
        $mailable->assertSeeInHtml($subscription->expire_at);

        $mailable->assertSeeInOrderInHtml(['Thanks,',config('app.name')]);
    }

    public function test_subscriptions_changed_status_from_expired_to_active_mail_send()
    {
        $user = User::factory()->create();
        $subscription = $user->subs->first();

        $mail = Mail::fake();

        $mail->assertNothingSent();
        $mail->send(new SubscriptionsChangedStatusFromExpiredToActive($subscription));
        $mail->assertSent(SubscriptionsChangedStatusFromExpiredToActive::class);

    }

}

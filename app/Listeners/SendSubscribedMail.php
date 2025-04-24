<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use App\Jobs\SendSubscribedMailJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSubscribedMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserSubscribed $event): void
    {
        SendSubscribedMailJob::dispatch($event->user)->delay(now()->addMinute(2));
    }
}

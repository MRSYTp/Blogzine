<?php

namespace App\Listeners;

use App\Jobs\SendWelcomeMailJob;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeMail
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
    public function handle(Registered $event): void
    {
        SendWelcomeMailJob::dispatch($event->user, $event->password)->delay(now()->addMinute(1));
    }
}

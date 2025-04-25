<?php

namespace App\Listeners;

use App\Jobs\SendUpdatedPasswordMailJob;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendUpdatedPasswordMail
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
    public function handle(PasswordReset $event): void
    {
        SendUpdatedPasswordMailJob::dispatch($event->user, $event->password)->delay(now()->addMinute(1));
    }
}

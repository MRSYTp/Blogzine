<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendSubscribedMailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected User $user,
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::raw('با تشکر از شما بابت عضوبت در خبرنامه بلاگ زین', function ($message) {

            $message->to($this->user->email);
            $message->subject('خوش آمدید به خبرنامه بلاگ زین');
        });
    }
}

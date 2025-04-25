<?php

namespace App\Jobs;

use App\Mail\UpdatedPassword;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendUpdatedPasswordMailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(

        protected User $user,
        protected string $password,
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)->send(new UpdatedPassword($this->user, $this->password));
    }
}

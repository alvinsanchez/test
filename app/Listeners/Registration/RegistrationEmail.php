<?php

namespace App\Listeners\Registration;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\UserRegistration;

class RegistrationEmail implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;
        Mail::to('alvinegaming15@gmail.com')->send(new UserRegistration($user));
    }

    public function failed(UserRegistration $event, $exception)
    {
        Log::debug('LISTENER: '.$exception->message());
    }
}

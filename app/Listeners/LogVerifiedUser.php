<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogVerifiedUser implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $connection = 'sqs';

    public $queue   = 'listeners';

    public $delay = 60;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {

    }
}

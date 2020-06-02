<?php

namespace App\Listeners;

use App\Events\ViewCounter;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ViewCounterListener
{
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
     * @param  ViewCounter  $event
     * @return void
     */
    public function handle(ViewCounter $event)
    {
       $event->page->increment('view_total');
       $event->page->increment('view_now');
    }
}

<?php

namespace NtimYeboah\LaravelGlare\Listeners;

use Illuminate\Cache\Events\KeyForgotten;

class LogKeyForgotten
{
    /**
     * Handle the event
     * 
     * @param \Illuminate\Cache\Events\KeyForgotten $event
     * 
     * @return void
     */
    public function handle(KeyForgotten $event)
    {
        // Save cachehit event in database
        logger()->info('KeyForgotten', ['event' => $event]);
    }
}
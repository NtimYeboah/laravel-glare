<?php

namespace NtimYeboah\LaravelGlare\Listeners;

use Illuminate\Cache\Events\KeyWritten;

class LogKeyWritten
{
    /**
     * Handle the event
     * 
     * @param \Illuminate\Cache\Events\KeyWritten $event
     * 
     * @return void
     */
    public function handle(KeyWritten $event)
    {
        // Save cachehit event in database
        logger()->info('KeyWritten', ['event' => $event]);
    }
}
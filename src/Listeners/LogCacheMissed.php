<?php

namespace NtimYeboah\LaravelGlare\Listeners;

use Illuminate\Cache\Events\CacheMissed;

class LogCacheMissed
{
    /**
     * Handle the event
     * 
     * @param \Illuminate\Cache\Events\CacheMissed $event
     * 
     * @return void
     */
    public function handle(CacheMissed $event)
    {
        // Save cachehit event in database
        logger()->info('CacheMissed', ['event' => $event]);
    }
}
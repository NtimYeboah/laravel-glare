<?php

namespace NtimYeboah\LaravelGlare\Listeners;

use Illuminate\Cache\Events\CacheHit;
use NtimYeboah\LaravelGlare\Models\CacheLog;

class LogCacheHit
{
    /**
     * Handle the event
     * 
     * @param \Illuminate\Cache\Events\CacheHit $event
     * 
     * @return void
     */
    public function handle(CacheHit $event)
    {
        CacheLog::create([
            'value' => json_encode($event->value),
            'key' => $event->key,
            'tags' =>  json_encode($event->tags),
            'event' => get_class($event)
        ]);
    }
}
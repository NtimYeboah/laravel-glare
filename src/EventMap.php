<?php

namespace NtimYeboah\LaravelGlare;

use Illuminate\Cache\Events\CacheHit;
use Illuminate\Cache\Events\KeyWritten;
use Illuminate\Cache\Events\CacheMissed;
use Illuminate\Cache\Events\KeyForgotten;
use NtimYeboah\LaravelGlare\Listeners\LogCacheHit;
use NtimYeboah\LaravelGlare\Listeners\LogKeyWritten;
use NtimYeboah\LaravelGlare\Listeners\LogCacheMissed;
use NtimYeboah\LaravelGlare\Listeners\LogKeyForgotten;

trait EventMap
{
    /**
     * Event listener mappings
     * 
     * @var array $events
     */
    protected $events = [
        CacheHit::class => [
            LogCacheHit::class
        ],

        KeyWritten::class => [
            LogKeyWritten::class
        ],

        CacheMissed::class => [
            LogCacheMissed::class
        ],

        KeyForgotten::class => [
            LogKeyForgotten::class
        ]
    ];
}
<?php

namespace NtimYeboah\LaravelGlare;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;

class GlareServiceProvider extends ServiceProvider
{
    use EventMap;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerEvents();
        $this->registerMigration();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        
    }

    /**
     * Register cache events
     * 
     * @return void
     */
    protected function registerEvents()
    {
        $events = $this->app->make(Dispatcher::class);

        foreach ($this->events as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * Register cache log table migrations
     * 
     * @return void
     */
    protected function registerMigration()
    {
        if (! class_exists('CreateCacheLogTable')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__ . '/../migrations/create_cache_log_table.php.stub' => database_path('/migrations/' . $timestamp . '_create_cache_log_table.php')
            ], 'migrations');
        }
    }
}

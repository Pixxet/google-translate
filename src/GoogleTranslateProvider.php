<?php

namespace Dedicated\GoogleTranslate;
use Illuminate\Support\ServiceProvider;

class GoogleTranslateProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configFile = __DIR__ . '/../config/google.php';

        $this->publishes([
            $configFile => config_path('google.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('sitemap', 'Watson\Sitemap\Sitemap');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/google.php', 'google'
        );
    }
}

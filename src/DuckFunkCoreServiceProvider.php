<?php

namespace Torralbodavid\DuckFunkCore;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiServiceProvider;
use Torralbodavid\DuckFunkCore\Core\Menu;
use Torralbodavid\DuckFunkCore\Models\Arcturus\User;
use Torralbodavid\DuckFunkCore\Models\Housekeeping\News;
use Torralbodavid\DuckFunkCore\Observers\NewsObserver;
use Torralbodavid\DuckFunkCore\Observers\UserObserver;
use Torralbodavid\DuckFunkCore\View\Components\Captcha;

class DuckFunkCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'duck-funk-core');
        $this->loadViewsFrom(__DIR__.'/resources/views/housekeeping', 'housekeeping');
        $this->loadViewsFrom(__DIR__.'/resources/views/auth', 'auth');

        $this->loadViewComponentsAs('core', [
            Captcha::class,
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/duck-funk.php');
        $this->loadRoutesFrom(__DIR__.'/routes/duck-funk-api.php');

        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('duck-funk.php'),
        ], 'duck-funk-core/config');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/duck-funk-core/'),
        ], 'duck-funk-core/views');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/duck-funk-core'),
        ], 'duck-funk-core/assets');


        // Registering package commands.
        User::observe(UserObserver::class);
        News::observe(NewsObserver::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('duck-funk-core', fn () => new DuckFunkCore);

        $this->app->singleton(Menu::class);
        $this->app->register(UiServiceProvider::class);
        $this->app->register(DuckFunkEventServiceProvider::class);

        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'duck-funk');
    }
}

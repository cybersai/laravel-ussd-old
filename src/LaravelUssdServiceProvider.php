<?php

namespace CyberSai\LaravelUssd;

use CyberSai\LaravelUssd\Console\Commands\CreateController;
use CyberSai\LaravelUssd\Console\Commands\CreateListView;
use CyberSai\LaravelUssd\Console\Commands\CreateMigration;
use CyberSai\LaravelUssd\Console\Commands\CreateModel;
use CyberSai\LaravelUssd\Console\Commands\CreateSimpleView;
use CyberSai\LaravelUssd\Console\Commands\CreateTitledView;
use Illuminate\Support\ServiceProvider;

class LaravelUssdServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'cybersai');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'cybersai');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ussd.php', 'ussd');

        // Register the service the package provides.
        $this->app->singleton('ussd', function ($app) {
            return new LaravelUssd;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ussd'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/ussd.php' => config_path('ussd.php'),
        ]);

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/cybersai'),
        ], 'ussd.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/cybersai'),
        ], 'ussd.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/cybersai'),
        ], 'ussd.views');*/

        // Registering package commands.
         $this->commands([
             CreateMigration::class,
             CreateModel::class,
             CreateSimpleView::class,
             CreateTitledView::class,
             CreateListView::class,
             CreateController::class
         ]);
    }
}

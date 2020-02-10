<?php

namespace Cybersai\LaravelUssd;

use Cybersai\LaravelUssd\Console\Commands\CreateController;
use Cybersai\LaravelUssd\Console\Commands\CreateListView;
use Cybersai\LaravelUssd\Console\Commands\CreateMigration;
use Cybersai\LaravelUssd\Console\Commands\CreateModel;
use Cybersai\LaravelUssd\Console\Commands\CreateSimpleView;
use Cybersai\LaravelUssd\Console\Commands\CreateTitledView;
use Cybersai\LaravelUssd\Console\Commands\CreateViewGroup;
use Cybersai\LaravelUssd\Console\Commands\CreateViewValidator;
use Illuminate\Support\ServiceProvider;

class UssdServiceProvider extends ServiceProvider
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
        $this->mergeConfigFrom(__DIR__ . '/../config/ussd.php', 'laravelussd');

        // Register the service the package provides.
        $this->app->singleton('laravelussd', function ($app) {
            return new Ussd;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelussd'];
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
        ], 'laravelussd.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/cybersai'),
        ], 'laravelussd.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/cybersai'),
        ], 'laravelussd.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/cybersai'),
        ], 'laravelussd.views');*/

        // Registering package commands.
         $this->commands([
             CreateController::class,
             CreateListView::class,
             CreateMigration::class,
             CreateModel::class,
             CreateSimpleView::class,
             CreateTitledView::class,
             CreateViewGroup::class,
             CreateViewValidator::class
         ]);
    }
}

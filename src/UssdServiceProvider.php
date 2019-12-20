<?php

namespace CyberSai\LaravelUssd;

use CyberSai\LaravelUssd\Console\Commands\CreateController;
use CyberSai\LaravelUssd\Console\Commands\CreateListView;
use CyberSai\LaravelUssd\Console\Commands\CreateMigration;
use CyberSai\LaravelUssd\Console\Commands\CreateModel;
use CyberSai\LaravelUssd\Console\Commands\CreateSimpleView;
use CyberSai\LaravelUssd\Console\Commands\CreateTitledView;
use CyberSai\LaravelUSSD\Console\Commands\CreateViewGroup;
use CyberSai\LaravelUSSD\Console\Commands\CreateViewValidator;
use Illuminate\Support\ServiceProvider;

class UssdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole())
        {
            $this->publishes([
                __DIR__ . '/../config/ussd.php' => config_path('ussd.php'),
            ]);

            $this->commands([
                CreateMigration::class,
                CreateModel::class,
                CreateSimpleView::class,
                CreateTitledView::class,
                CreateListView::class,
                CreateController::class,
                CreateViewGroup::class,
                CreateViewValidator::class
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ussd.php', 'config');
    }
}

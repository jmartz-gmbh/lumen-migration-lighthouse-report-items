<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LighthouseReportItemsMigrationProvider
 * @package App\Providers
 */
class LighthouseReportItemsMigrationProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}

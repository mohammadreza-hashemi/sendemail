<?php

namespace SendEmail;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class SendEmailProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views/','send');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info('message2');

    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (file_exists($file = $this->app->environmentFilePath())) {
            $this->app->make(\Illuminate\Contracts\Config\Repository::class)
                ->set('env', file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

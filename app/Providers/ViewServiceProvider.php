<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite; 

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Vite::macro('image', fn($asset) => $this->asset("resources/images/$asset"));
        Vite::macro('picture', fn($asset) => $this->asset("resources/img/$asset"));
    }
}

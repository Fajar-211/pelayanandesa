<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RootServiceProvider extends ServiceProvider
{

    public const HOME = '/user';
    /**
     * Register services.
     */

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

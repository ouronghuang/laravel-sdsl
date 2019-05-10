<?php

namespace Orh\LaravelSdsl;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    public function register()
    {
        //
    }
}

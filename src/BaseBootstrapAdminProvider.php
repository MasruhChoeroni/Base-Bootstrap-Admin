<?php

namespace Mchoe\BaseBootstrapAdmin;

use Illuminate\Support\ServiceProvider;

class BaseBootstrapAdminProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'base-bootstrap-admin');
    }

    public function register()
    {
        //
    }
}

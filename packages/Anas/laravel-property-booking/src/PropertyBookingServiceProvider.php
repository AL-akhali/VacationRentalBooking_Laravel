<?php

namespace Vendor\PropertyBooking;

use Illuminate\Support\ServiceProvider;

class PropertyBookingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'property-booking');
    }

    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GetReferenceRateServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton( 'referenceRate', function ( $app ) {
            // return env('REFERENCE_RATE');
            return config( 'app.REFERENCE_RATE' );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides()
    {
        return [ 'referenceRate' ];
    }
}

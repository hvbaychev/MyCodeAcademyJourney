<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GetCurrencyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->singleton('currency_list', function ($app) {
            $API = "https://api.freecurrencyapi.com/v1/latest?apikey=ePVbKeFi9kJURQyKiT5nVvWhBtNp4pdShQqqKeGw";
            $json_data = file_get_contents( $API );
            $response_data = json_decode($json_data);
            return $response_data->data;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

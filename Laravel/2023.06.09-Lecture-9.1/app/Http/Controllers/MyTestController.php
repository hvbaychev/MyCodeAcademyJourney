<?php

namespace App\Http\Controllers;
use App\Models\Currency;

use Illuminate\Http\Request;

class MyTestController extends Controller
{
    private $currency_list;
    private $currency_cahe;

    public function __construct()
    {
        $this->currency_list = app('currency_list');
        $this->currency_cahe = [
            "RUB",
            "JPY",
            "GBP",
            "EUR",
        ];
    }
    
    public function now()
    {

        $data = array();
        foreach ( $this->currency_list as $name => $rate ) {
            $cache = "no_cache";
        
            if (in_array($name, $this->currency_cahe)) {
                $currency = Currency::where('currency', $name)->first();
        
                if ( $currency ) {
                    $cache = $currency->rate;
                    $currency->rate = $rate;
                    $currency->save();
                } else {
                    // Currency not found, create a new instance and save it
                    $currency = new Currency();
                    $currency->currency = $name;
                    $currency->rate = $rate;
                    $currency->save();
                }
            }
        
            $data[] = ["name" => $name, "rate_now" => $rate, "rate_cached" => $cache];
        }
        
        return view('home', ["data" => $data]);
    }

    public function below( $value = null )
    {
        if  ( isset( $value ) && $value == (int)$value ) {
            $CurrencyList = json_decode(json_encode(app('CurrencyList')), true);
            // return "value=".$value;
            $filteredValues = collect($this->CurrencyList)->filter(function ($element) use ($value) {
                return $element < $value;
            });
            return view('home', ["data" => $filteredValues , "text" => "below : ".$value]);
        } else {
            $error = "Missing or wrong input.";
            return $error;
        }
    }

    public function above( $value = null )
    {
        if  ( isset( $value ) && $value == (int)$value ) {
            $CurrencyList = json_decode(json_encode(app('CurrencyList')), true);
            // return "value=".$value;
            $filteredValues = collect($this->CurrencyList)->filter(function ($element) use ($value) {
                return $element > $value;
            });
            return view('home', ["data" => $filteredValues , "text" => "above : ".$value]);
        } else {
            $error = "Missing or wrong input.";
            return $error;
        }
    }

}

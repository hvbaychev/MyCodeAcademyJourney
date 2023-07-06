<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestController extends Controller
{
    private $CurrencyList;
    // private $CurrencyList = app('CurrencyList');
    public function __construct()
    {
        $this->CurrencyList = app('CurrencyList');
    }
    
    public function home()
    {
        return view('home', ["data" => $this->CurrencyList]);
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

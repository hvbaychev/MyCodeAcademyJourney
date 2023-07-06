<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get( '/', function () {
    return view( 'main' );
});

Route::get( 'about', function () {
    return view( 'about' );
});

Route::get( 'hello' , function () {
    // return view('hello', [ "name" => "joro" ] );
    return view( 'hello', [ "name" => env( 'MAIL_FROM_ADDRESS' ) ] );

});

Route::get('/calc-euro-to-lv/{value?}', function ( $value = null ) {
    if  ( isset( $value ) && $value == (int)$value ) {
        $rate = app('referenceRate');
        return view('calc', [
            "value" => $value,
            "value_curency" => "euro",
            "rate" => $rate,
            "result" => $value * $rate,
            "result_curency" => "lv"
        ]);
    } else {
        $error = "Missing or wrong input.";
        return view('error', ["error" => $error ]);
    }
});
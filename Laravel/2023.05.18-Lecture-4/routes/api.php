<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/calc-euro-to-lv/{value?}', function ( $value = null ) {
    $rate = app('referenceRate');
    if ( isset($value) && $value == (int)$value ) {
        $data = [
            "value" => $value,
            "value_curency" => "euro",
            "rate" => $rate,
            "result" => $value * $rate,
            "result_curency" => "lv",
        ];
    } else {
        $data = ["Data"=>"Missing or wrong input."];
    }
    return response()->json( $data );
});

Route::get('/calc-lv-to-euro/{value?}', function ( $value = null ) {
    $rate = app('referenceRate');
    if ( isset($value) && $value == (int)$value ) {
        $data = [
            "value" => $value,
            "value_curency" => "lv",
            "rate" => $rate,
            "result" => $value / $rate,
            "result_curency" => "euro",
        ];
    } else {
        $data = ["Data"=>"Missing or wrong input."];
    }
    return response()->json( $data );
});
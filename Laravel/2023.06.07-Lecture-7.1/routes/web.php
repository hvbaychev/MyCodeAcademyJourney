<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyTestController;

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

Route::get('/', function () {
    $CurrencyList = app('CurrencyList');
    return view( 'home', [ "data" => $CurrencyList ] );
});

// Route::get('/get', function () {
//     $CurrencyList = app('CurrencyList');
//     return $CurrencyList;
// });

// Route::get('/below/{value?}', function ( $value = null ) {
//     if  ( isset( $value ) && $value == (int)$value ) {
//         $CurrencyList = json_decode(json_encode(app('CurrencyList')), true);
//         // return "value=".$value;
//         $filteredValues = collect($CurrencyList)->filter(function ($element) use ($value) {
//             return $element < $value;
//         });
//         return $filteredValues->all();
//     } else {
//         $error = "Missing or wrong input.";
//         return $error;
//     }
// });

// Route::get('/above/{value?}', function ( $value = null ) {
//     if  ( isset( $value ) && $value == (int)$value ) {
//         $CurrencyList = json_decode(json_encode(app('CurrencyList')), true);
//         // return "value=".$value;
//         $filteredValues = collect($CurrencyList)->filter(function ($element) use ($value) {
//             return $element > $value;
//         });
//         return $filteredValues->all();
//     } else {
//         $error = "Missing or wrong input.";
//         return $error;
//     }
// });

route::controller(MyTestController::class)->group(function(){
    route::get('/below/{value?}', 'below')->name('below');
    route::get('/above/{value?}', 'above')->name('above');
});
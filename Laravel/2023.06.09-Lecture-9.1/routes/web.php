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

route::controller(MyTestController::class)->group(function(){
    route::get('/', 'now')->name('now');
    route::get('/below/{value?}', 'below')->name('below');
    route::get('/above/{value?}', 'above')->name('above');
});
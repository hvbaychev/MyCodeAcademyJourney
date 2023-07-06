<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OwnerController;

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
    return view('reservation');
});


Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('cars.index');
    Route::get('/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/', [CarController::class, 'store'])->name('cars.store');
    Route::get('/{id}', [CarController::class, 'show'])->name('cars.show');
    Route::get('/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
});

Route::prefix('owners')->group(function () {
    Route::get('/', [OwnerController::class, 'index'])->name('owners.index');
    Route::get('/create', [OwnerController::class, 'create'])->name('owners.create');
    Route::post('/', [OwnerController::class, 'store'])->name('owners.store');
    Route::get('/{id}', [OwnerController::class, 'show'])->name('owners.show');
    Route::get('/{id}/edit', [OwnerController::class, 'edit'])->name('owners.edit');
    Route::put('/{id}', [OwnerController::class, 'update'])->name('owners.update');
    Route::delete('/{id}', [OwnerController::class, 'destroy'])->name('owners.destroy');
});

Route::prefix('mechanics')->group(function () {
    Route::get('/', [MechanicController::class, 'index'])->name('mechanics.index');
    Route::get('/create', [MechanicController::class, 'create'])->name('mechanics.create');
    Route::post('/', [MechanicController::class, 'store'])->name('mechanics.store');
    Route::get('/{id}', [MechanicController::class, 'show'])->name('mechanics.show');
    Route::get('/{id}/edit', [MechanicController::class, 'edit'])->name('mechanics.edit');
    Route::put('/{id}', [MechanicController::class, 'update'])->name('mechanics.update');
    Route::delete('/{id}', [MechanicController::class, 'destroy'])->name('mechanics.destroy');
});

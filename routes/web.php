<?php

use App\Http\Controllers\ParserController as ParserController;
use App\Http\Controllers\VehicleController as VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('home', [VehicleController::class, 'home'])
    ->name('home');

Route::get('vehicles', [VehicleController::class, 'index'])
    ->name('vehicles');

Route::get('show/{id}', [VehicleController::class, 'show'])
    ->where('id', '\d+')
    ->name('show');

Route::get('show/delete/{id}', [VehicleController::class, 'delete'])
    ->where('id', '\d+')
    ->name('delete');

Route::get('edit/{id}', [VehicleController::class, 'edit'])
    ->where('id', '\d+')
    ->name('edit');

Route::get(uri: 'vehicles/create', action: [VehicleController::class, 'create'])
    ->name('create');

Route::post('/store', [VehicleController::class, 'store'])
    ->name('store');

Route::post('update/{id}', [VehicleController::class, 'update'])
    ->where('id', '\d+')
    ->name('update');

Route::get('/parsing', ParserController::class);

//Route::get('/showRes', ParserController::class);
//Route::get('/findEquipment', [ParserController::class, 'findEquipment']);

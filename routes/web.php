<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FahrerController;
use App\Http\Controllers\FahrtenController;

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
Route::resource('/fahrer', FahrerController::class);
Route::resource('/fahrten', FahrtenController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('app');
});


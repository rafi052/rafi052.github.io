<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home','App\Http\Controllers\folioCon@index')->name('home');
Route::post('home/storetambah','App\Http\Controllers\folioCon@store')->name('home');
Route::get('/home/hapus/{id}','App\Http\Controllers\folioCon@hapus')->name('home');

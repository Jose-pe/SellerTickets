<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('ticketestandar', function(){
    return view('ticketestandar');
})->name('ticketestandar');

Route::get('ticketvip', function(){
    return view('ticketvip');
})->name('ticketvip');

Route::get('admincompras', [App\Http\Controllers\CompraController::class, 'index'])->name('admincompras');
Route::post('registrarcompra', [App\Http\Controllers\CompraController::class, 'store'])->name('registrarcompra');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



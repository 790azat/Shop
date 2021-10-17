<?php

use App\Http\Controllers\CorsController as CorsController;
use App\Http\Controllers\ItemsController;
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


Auth::routes();

Route::get('/', [ItemsController::class, 'index'])->name('home');
Route::get('/del',[CorsController::class,'clearcors']);
Route::get('/add/cors',[CorsController::class,'AddThis']);
Route::get('/dd',function (){
    return dd(session()->all());
});
Route::post('/del/cors/please',[CorsController::class,'clearcors']);
Route::post('/get/cors/number',[CorsController::class,'getcorsnumber']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

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

Route::get("/",'App\Http\Controllers\pageController@index');
Route::get("/accessories",'App\Http\Controllers\pageController@accessories');
Route::get("/livemechanic",'App\Http\Controllers\pageController@livemechanic');
Route::get("/washing",'App\Http\Controllers\pageController@washing');
Route::get("/ridershub",'App\Http\Controllers\pageController@ridershub');
Route::get("/contact",[contactController::class,'contact']);
Route::post("/send-message",[contactController::class,'sendEmail'])->name('contact.send');
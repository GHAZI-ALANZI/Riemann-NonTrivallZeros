<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZetaController;
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

Route::get('/', function () {return view('index');})->name('index');
Route::get('/main', function () {return view('content');})->name('main');
Route::get('/contact', function () {return view('contact');})->name('contact');
/* Route::get('/nontrival', function () {return view('nontrival');})->name('nontrival'); */
Route::get('/zeros',[ZetaController::class,'getZeros'])->name('nontrival');


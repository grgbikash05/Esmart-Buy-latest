<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [HomeController::class, 'homepage']);

Route::get('/start-comparing', [HomeController::class, 'index'])->middleware('auth');

// Search Functions

Route::get('/search', [SearchController::class, 'search'])->middleware('auth');

Route::get('/product/{id}', [SearchController::class, 'products'])->middleware('auth');

Auth::routes(['verify' => true]);

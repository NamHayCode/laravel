<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'getIndex']);
Route::get('/index', [PageController::class, 'getIndex']);
Route::get('/cart', [PageController::class, 'getCart']);
Route::get('detail/{id}', [PageController::class, 'getDetail'])->name('detail');
Route::get('/search', [SearchController::class,'search'])->name('search');

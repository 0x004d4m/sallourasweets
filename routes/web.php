<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/set-language/{locale}', [LandingPageController::class, 'setLanguage'])->name('set-language');
Route::get('/', [LandingPageController::class, 'home'])->name('home');
Route::get('/privacy', [LandingPageController::class, 'privacy'])->name('privacy');
Route::get('/videos', [LandingPageController::class, 'videos'])->name('videos');
Route::get('/terms', [LandingPageController::class, 'terms'])->name('terms');
Route::get('/Categories/{id}', [LandingPageController::class, 'categories'])->name('categories');
Route::get('/Products/{id}', [LandingPageController::class, 'product'])->name('product');
Route::get('/Search', [LandingPageController::class, 'search'])->name('search');

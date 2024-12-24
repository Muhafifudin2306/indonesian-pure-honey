<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('landingPage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('section-one')->group(function () {
        Route::get('/', [App\Http\Controllers\SectionOneController::class, 'indexOne'])->name('indexOne');
        Route::post('/add', [App\Http\Controllers\SectionOneController::class, 'storeOne'])->name('addOne');
    });


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
    Route::post('/update/{id}', [App\Http\Controllers\SectionOneController::class, 'update'])->name('updateOne');
    Route::delete('/delete/{id}', [App\Http\Controllers\SectionOneController::class, 'destroy'])->name('deleteOne');
});

Route::prefix('seo')->group(function () {
    Route::get('/', [App\Http\Controllers\SeoController::class, 'indexSeo'])->name('indexSeo');
    Route::post('/add', [App\Http\Controllers\SeoController::class, 'storeSeo'])->name('addSeo');
});

Route::prefix('header')->group(function () {
    Route::get('/', [App\Http\Controllers\HeaderController::class, 'indexHeader'])->name('indexHeader');
    Route::post('/add', [App\Http\Controllers\HeaderController::class, 'storeHeader'])->name('addHeader');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [App\Http\Controllers\ContactController::class, 'indexContact'])->name('indexContact');
    Route::post('/add', [App\Http\Controllers\ContactController::class, 'storeContact'])->name('addContact');
    Route::post('/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('updateContact');
    Route::delete('/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('deleteContact');
});

Route::prefix('sponsor')->group(function () {
    Route::get('/', [App\Http\Controllers\SponsorController::class, 'indexSponsor'])->name('indexSponsor');
    Route::post('/add', [App\Http\Controllers\SponsorController::class, 'storeSponsor'])->name('addSponsor');
    Route::post('/update/{id}', [App\Http\Controllers\SponsorController::class, 'update'])->name('updateSponsor');
    Route::delete('/delete/{id}', [App\Http\Controllers\SponsorController::class, 'destroy'])->name('deleteSponsor');
});

Route::prefix('about')->group(function () {
    Route::get('/', [App\Http\Controllers\AboutController::class, 'indexAbout'])->name('indexAbout');
    Route::post('/add', [App\Http\Controllers\AboutController::class, 'storeAbout'])->name('addAbout');
});

Route::prefix('team')->group(function () {
    Route::get('/', [App\Http\Controllers\TeamController::class, 'indexTeam'])->name('indexTeam');
    Route::post('/add', [App\Http\Controllers\TeamController::class, 'storeTeam'])->name('addTeam');
    Route::post('/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('updateTeam');
    Route::delete('/delete/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('deleteTeam');
});
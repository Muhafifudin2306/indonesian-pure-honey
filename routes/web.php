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
Route::get('blog-{slug}', [App\Http\Controllers\LandingPageController::class, 'detailBlog']);
Route::get('list-blog', [App\Http\Controllers\LandingPageController::class, 'blogList']);


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

Route::prefix('value')->group(function () {
    Route::get('/', [App\Http\Controllers\ValueController::class, 'indexValue'])->name('indexValue');
    Route::post('/add', [App\Http\Controllers\ValueController::class, 'storeValue'])->name('addValue');
    Route::post('/update/{id}', [App\Http\Controllers\ValueController::class, 'update'])->name('updateValue');
    Route::delete('/delete/{id}', [App\Http\Controllers\ValueController::class, 'destroy'])->name('deleteValue');
});

Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductController::class, 'indexProduct'])->name('indexProduct');
    Route::post('/add', [App\Http\Controllers\ProductController::class, 'storeProduct'])->name('addProduct');
    Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('updateProduct');
    Route::delete('/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('deleteProduct');
    Route::delete('/image/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroyImage'])->name('deleteImageProduct');
});

Route::prefix('video')->group(function () {
    Route::get('/', [App\Http\Controllers\VideoController::class, 'indexVideo'])->name('indexVideo');
    Route::post('/add', [App\Http\Controllers\VideoController::class, 'storeVideo'])->name('addVideo');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'indexBlog'])->name('indexBlog');
    Route::post('/add', [App\Http\Controllers\BlogController::class, 'storeBlog'])->name('addBlog');
    Route::post('/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('updateBlog');
    Route::delete('/delete/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('deleteBlog');
});

Route::prefix('location')->group(function () {
    Route::get('/', [App\Http\Controllers\LocationController::class, 'indexLocation'])->name('indexLocation');
    Route::post('/add', [App\Http\Controllers\LocationController::class, 'storeLocation'])->name('addLocation');
});

Route::prefix('footer')->group(function () {
    Route::get('/', [App\Http\Controllers\FooterController::class, 'indexFooter'])->name('indexFooter');
    Route::post('/add', [App\Http\Controllers\FooterController::class, 'storeFooter'])->name('addFooter');
});

Route::prefix('region')->group(function () {
    Route::get('/', [App\Http\Controllers\LandingPageController::class, 'regionData'])->name('regionData');
});

Route::prefix('export')->group(function () {
    Route::get('/', [App\Http\Controllers\RegionController::class, 'indexRegion'])->name('indexRegion');
    Route::post('/add', [App\Http\Controllers\RegionController::class, 'storeRegion'])->name('storeRegion');
    Route::post('/update/{id}', [App\Http\Controllers\RegionController::class, 'updateRegion'])->name('updateRegion');
    Route::delete('/delete/{id}', [App\Http\Controllers\RegionController::class, 'destroyRegion'])->name('deleteRegion');
});

Route::prefix('vision')->group(function () {
    Route::get('/', [App\Http\Controllers\VisionController::class, 'indexVision'])->name('indexVision');
    Route::post('/add', [App\Http\Controllers\VisionController::class, 'storeVision'])->name('addVision');
});

Route::prefix('mission')->group(function () {
    Route::get('/', [App\Http\Controllers\MissionController::class, 'indexMission'])->name('indexMission');
    Route::post('/add', [App\Http\Controllers\MissionController::class, 'storeMission'])->name('addMission');
    Route::post('/update/{id}', [App\Http\Controllers\MissionController::class, 'update'])->name('updateMission');
    Route::delete('/delete/{id}', [App\Http\Controllers\MissionController::class, 'destroy'])->name('deleteMission');
});


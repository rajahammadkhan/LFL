<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DreamCarController;
use App\Http\Controllers\GalaNightController;
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


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "all cleared ...";

});

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/win-car', function () {
//     return view('win-car');
// })->name('match-schedule');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/terms-and-conditions', function () {
    return view('terms-and-condition');
})->name('terms-and-conditions');
Route::get('/blog-details', function () {
    return view('blog-detail');
})->name('blog-details');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/buy-tickets', function () {
    return view('buy-tickets');
})->name('buy-tickets');

//contact
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us');

//contact
Route::get('/win-car', [DreamCarController::class, 'index'])->name('match-schedule');
Route::post('/win-us', [DreamCarController::class, 'store'])->name('win-us');

////gala-night
Route::get('/gala-dinner', [GalaNightController::class, 'index'])->name('gala-dinner');
Route::post('/gala-night', [GalaNightController::class, 'store'])->name('gala-night');
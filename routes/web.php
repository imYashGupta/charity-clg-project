<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::view('/', 'index')->name("home");
Route::view('/home', 'index');
Route::view('about', 'about')->name("page.about");
Route::view('become-volunteer', 'become-volunteer')->name("page.become-volunteer");
Route::view('volunteer', 'volunteer')->name("page.volunteer");
Route::view('contact', 'contact')->name("page.contact");
Route::view('campaigns', 'campaigns')->name("page.campaigns");
Route::view('campaign-details', 'campaign-details')->name("page.campaign-details");
Route::view('event-details', 'event-details')->name("page.event-details");
Route::view('event', 'event')->name("page.event");
Route::view('news', 'news')->name("page.news");
Route::view('news-details', 'news-details')->name("page.news-details");
Route::view('home-2', 'index2')->name("page.home-2");
Route::view('home-3', 'index3')->name("page.home-3");

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

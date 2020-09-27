<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Mail\MessageCreated;

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


// Route::get('/', [PagesController::class, 'index'])->name('root_path');

// Route::get('/about', [PagesController::class, 'about'])->name('about_path');

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');

Route::get('/contact', [ContactController::class, 'create'])->name('contact_create');

Route::post('/contact', [ContactController::class, 'store'])->name('valid_request');

Route::redirect('/google', 'https://google.com');

//Route::ressource('pages', PagesController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

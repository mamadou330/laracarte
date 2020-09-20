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
Route::get('test-email', function(){
     return  new MessageCreated('Mamadou Saliou Bah', 'masaliou20142014@gmail.com', 'Merci pour laracarte');
});

Route::get('/', [PagesController::class, 'index'])->name('root_path');

Route::get('/about', [PagesController::class, 'about'])->name('about_path');

Route::get('/contact', [ContactController::class, 'create'])->name('contact_path');

Route::post('/contact', [ContactController::class, 'store'])->name('valid_request');

//Route::ressource('pages', PagesController::class);

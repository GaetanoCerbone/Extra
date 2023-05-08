<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');

// BOOKS
Route::get('book/create',[BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/index', [BookController::class, 'index'])->name('book.index');

// MAIL
Route::get('contact',[ContactController::class, 'contact'])->name('contattaci');
// Route::post('contact/us',[ContactController::class, 'send_email'])->name('contact.us');
Route::post('contact/us', [ContactController::class, 'contact_us'])->name('contact.us');


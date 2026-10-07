<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacts\ContactController;

Route::view('/', 'pages.home')->name('home');

Route::get('/{locale}', function () {
    return view('pages.home');
})->whereIn('locale', ['pt-br', 'en'])->middleware('locale')->name('locale');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

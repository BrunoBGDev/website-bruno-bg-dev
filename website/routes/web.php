<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contacts\ContactController;

Route::get('/', function (Request $request) {
    $language = strtolower($request->getPreferredLanguage());

    $locale = str_starts_with($language, 'en')
        ? 'en'
        : 'pt-br';

    return redirect()->route('locale', [
        'locale' => $locale,
    ]);
})->name('home');

Route::prefix('{locale}')
    ->whereIn('locale', ['pt-br', 'en'])
    ->middleware('locale')
    ->group(function () {

        Route::get('/', function () {
            return view('pages.home');
        })->name('locale');

        Route::post('/contact', [ContactController::class, 'store'])
            ->name('contact.store');
    });

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/{locale}', function () {
    return view('pages.home');
})->whereIn('locale', ['pt-br', 'en'])->middleware('locale')->name('locale');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

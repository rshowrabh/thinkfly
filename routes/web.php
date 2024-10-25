<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/data', [FrontendController::class, 'data'])->name('frontend.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('clear', function () {

        \Artisan::call('optimize:clear');

        dd("Cache is cleared");

});

require __DIR__.'/auth.php';

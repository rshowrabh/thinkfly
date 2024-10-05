<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;


/** set side bar active dynamic */
function set_active($route) {
    if(is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active': '';
}

// Frontend

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/appointment', [FrontendController::class, 'appointment'])->name('frontend.appointment');
Route::post('/appointment/store', [FrontendController::class, 'store'])->name('frontend.appointment.store');




// Admin
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::get('/dashboard_old', function () {
    return view('dashboard_old');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
    Route::post('/banner', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    
});
Route::get('admin/appointment/data', [AppointmentController::class, 'getAppointmentData'])->name('get-appointment-data');

require __DIR__.'/auth.php';

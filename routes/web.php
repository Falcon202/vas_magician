<?php


use App\Http\Controllers\Admin\AdminPanelContr;
use App\Http\Controllers\HomeContr;
use App\Http\Controllers\UserProfile\UserProfile;
use App\Http\Middleware\IsLoggedIn;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeContr::class, 'home']);
Route::get('/home', [HomeContr::class, 'home'])->name('home');


// Must be logged in
// Admin panel
Route::middleware([IsLoggedIn::class])->prefix('/admin_panel')->group(function () {
    Route::get('', [AdminPanelContr::class, 'admin_panel'])->name('admin_panel');
});

// Change password
Route::middleware([IsLoggedIn::class])->prefix('/profile')->group(function () {
    Route::get('/change_password', [UserProfile::class, 'change_password'])->name('profile_change_password');
    Route::post('/do_change_password', [UserProfile::class, 'do_change_password'])->name('profile_do_change_password');
});



require __DIR__.'/auth.php';

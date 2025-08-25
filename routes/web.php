<?php


use App\Http\Controllers\Admin\AdminPanelContr;
use App\Http\Controllers\Admin\AdminPBlogContr;
use App\Http\Controllers\Admin\AdminPBlogPhotosContr;
use App\Http\Controllers\Admin\City\AdminPCityContr;
use App\Http\Controllers\APIs\BlogPhotoContr;
use App\Http\Controllers\BlogContr;
use App\Http\Controllers\GaleriesContr;
use App\Http\Controllers\HomeContr;
use App\Http\Controllers\InfoContr;
use App\Http\Controllers\TownContr;
use App\Http\Middleware\IsLoggedIn;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeContr::class, 'index']);
Route::get('/index', [HomeContr::class, 'index'])->name('index');
Route::get('/contact', [HomeContr::class, 'contact'])->name('contact');
Route::get('/references', [HomeContr::class, 'references'])->name('references');
Route::get('/fotogalery', [GaleriesContr::class, 'fotogalery'])->name('fotogalery');
Route::get('/videogalery', [GaleriesContr::class, 'videogalery'])->name('videogalery');

Route::get('/akceprodeti', [HomeContr::class, 'akceprodeti'])->name('akceprodeti');
Route::get('/kouzelnikprodeti', [HomeContr::class, 'kouzelnikprodeti'])->name('kouzelnikprodeti');
Route::get('/town/{id}', [TownContr::class, 'town'])->name('town');

Route::get('/blog', [BlogContr::class, 'blog'])->name('blog');
Route::get('/category/{id}', [BlogContr::class, 'category'])->name('category');
Route::get('/single_blog/{id}', [BlogContr::class, 'single_blog'])->name('single_blog');

Route::get('/info', [InfoContr::class, 'info'])->name('info');


// API for photos
Route::get('/api/blog_photo/{id}', [BlogPhotoContr::class, 'show_photo'])->name('api_blog_photo');

// Must be logged in - Admin panel
Route::middleware([IsLoggedIn::class])->prefix('/admin_panel')->group(function () {
    Route::get('', [AdminPanelContr::class, 'admin_panel'])->name('admin_panel');

    // Category ???

    // blog
    Route::prefix('/blog')->group(function () {
        Route::get('', [AdminPBlogContr::class, 'blog'])->name('ap_blog');
        Route::get('/create', [AdminPBlogContr::class, 'create'])->name('ap_blog_create');
        Route::post('/do_create', [AdminPBlogContr::class, 'do_create'])->name('ap_blog_do_create');
        Route::get('/edit/{id}', [AdminPBlogContr::class, 'edit'])->name('ap_blog_edit');
        Route::post('/do_edit', [AdminPBlogContr::class, 'do_edit'])->name('ap_blog_do_edit');
        Route::post('/do_delete', [AdminPBlogContr::class, 'do_delete'])->name('ap_blog_do_delete');
        // blog - photos
        Route::get('/photos/{id}', [AdminPBlogPhotosContr::class, 'photos'])->name('ap_blog_photos');
        Route::post('/add_photo', [AdminPBlogPhotosContr::class, 'add_photo'])->name('ap_blog_add_photo');
        Route::post('/add_main_photo', [AdminPBlogPhotosContr::class, 'add_main_photo'])->name('ap_blog_add_main_photo');
        Route::post('/delete_photo', [AdminPBlogPhotosContr::class, 'delete_photo'])->name('ap_blog_delete_photo');
    });

    // City
    Route::prefix('/city')->group(function () {
        Route::get('', [AdminPCityContr::class, 'city'])->name('ap_city');
        Route::get('/create', [AdminPCityContr::class, 'create'])->name('ap_city_create');
        Route::post('/do_create', [AdminPCityContr::class, 'do_create'])->name('ap_city_do_create');
        Route::get('/edit/{id}', [AdminPCityContr::class, 'edit'])->name('ap_city_edit');
        Route::post('/do_edit', [AdminPCityContr::class, 'do_edit'])->name('ap_city_do_edit');
        Route::post('/do_delete', [AdminPCityContr::class, 'do_delete'])->name('ap_city_do_delete');
    });
});

// Change password ???
//Route::middleware([IsLoggedIn::class])->prefix('/profile')->group(function () {
//    Route::get('/change_password', [UserProfile::class, 'change_password'])->name('profile_change_password');
//    Route::post('/do_change_password', [UserProfile::class, 'do_change_password'])->name('profile_do_change_password');
//});



require __DIR__.'/auth.php';

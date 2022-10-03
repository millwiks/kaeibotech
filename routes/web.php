<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Demo\DemoController;
use \App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(DemoController::class)->group(function(){
    Route::get('/about','Index')->name('about.page');
    Route::get('/contact','ContactMethod')->name('contact.page');
});

// admin all route
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/admin/reigister', 'RegisterInfo')->name('admin.register');
    Route::get('/admin/recover', 'RecoverInfo')->name('admin.recover');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

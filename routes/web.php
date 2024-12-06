<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;



Route::prefix('admin/products')->name('admin.products.')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('store', [ProductController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('show');

    Route::get('/events', [ProductController::class, 'tampilEvents'])->name('tampilevents');

});

Route::get('/', [LoginController::class, 'index'])->name('login');


Route::get('locale/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');


    Route::get('/user', [HomeController::class, 'index'])->name('index');
    Route::get('/assets', [HomeController::class, 'assets'])->name('assets');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create');
    Route::post('/user/store', [HomeController::class, 'store'])->name('user.store');


    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('user.detail');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

});


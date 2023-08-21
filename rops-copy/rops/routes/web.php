<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WisdomController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(WisdomController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});


Route::prefix('admin')->group(function () {
    Route::get('', [AuthController::class, 'index'])->name('admin');
    Route::get('create', [AuthController::class, 'create'])->name('admin.create');
    Route::post('store', [AuthController::class, 'store'])->name('admin.store');
    Route::get('edit/{id}', [AuthController::class, 'edit'])->name('admin.edit');
    Route::put('edit/{id}', [AuthController::class, 'update'])->name('admin.update');
    Route::delete('destroy/{id}', [AuthController::class, 'destroy'])->name('admin.destroy');

});
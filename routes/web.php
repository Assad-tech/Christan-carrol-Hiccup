<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth Routes
Route::middleware('guest')->group(function () {
    route::controller(AuthController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register-process', 'registerProcess')->name('register-process');

        Route::get('/login', 'login')->name('login');
        Route::post('/login-process', 'loginProcess')->name('login-process');
    });
});

Route::middleware(['hiccup', 'auth'])->group(function () {
    // Admin Routes
    Route::controller(AdminController::class)->prefix('admin')->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::get('/profile', 'profile')->name('admin.profile');
        Route::post('/update-profile', 'updateProfile')->name('admin.update-profile');
        Route::get('/users', 'users')->name('admin.users');
        Route::get('/payments', 'payments')->name('admin.payments');
        Route::get('/clicks', 'clicks')->name('admin.clicks');
        Route::get('/logout', 'logout')->name('admin.logout');
    });

    // User Routes
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('/view-profile', 'userProfile')->name('user.profile');
        Route::post('/update-profile', 'updateProfile')->name('user.update-profile');
        Route::get('/logout', 'logout')->name('user.logout');
    });
    // Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    // return view('welcome');
    if (auth()->check()) {
        if (auth()->user()->role_id == 1) {
            return redirect()->route('admin.dashboard');
        }

        $user = auth()->user();
        $paymentStatus = $user->payments()->exists(); // Check if the user has any payments
        // dd($paymentStatus);
        return view('frontend.index', ['payment_status' => $paymentStatus]);
    }

    return view('frontend.index', ['payment_status' => false]);
})->name('frontend.homepage');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavbarController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;


//Login and Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register/submit', [AuthController::class, 'submitRegister'])->name('register.submit');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('components/index-App');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/users/home', function () {
    return view('users/home');
});
Route::get('/users/consult', function () {
    return view('users/consult');
});
Route::get('/users/legalpedia', function () {
    return view('users/legalpedia');
});
Route::get('/users/forum', function () {
    return view('users/forum');
});


//Navbar Active State
Route::get('/users/home', [NavbarController::class, 'home'])->name('users.home');
Route::get('/users/consult', [NavbarController::class, 'consult'])->name('users.consult');
Route::get('/users/forum', [NavbarController::class, 'forum'])->name('users.forum');
Route::get('/users/legalpedia', [NavbarController::class, 'legalpedia'])->name('users.legalpedia');


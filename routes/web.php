<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components/index-App');
});


// //Role MiddleWare
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionController::class, 'showLogin'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
    Route::get('/register', [SessionController::class, 'showRegister'])->name('register');
    Route::post('/register', [SessionController::class, 'register']);
});

//Navbar Active State
Route::get('/users', [NavbarController::class, 'home'])->name('users.home');
Route::get('/users/consult', [NavbarController::class, 'consult'])->name('users.consult');
Route::get('/users/forum', [NavbarController::class, 'forum'])->name('users.forum');
Route::get('/users/legalpedia', [NavbarController::class, 'legalpedia'])->name('users.legalpedia');

Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::prefix('admin')->middleware('UserAccess:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin/dashboard');
        })->name('admin.dashboard');
        Route::get('/', [AdminController::class, 'admin']);
    });

    // Consultant routes
    Route::prefix('consultant')->middleware('UserAccess:consultant')->group(function () {
        Route::get('', function () {
            return view('consultant/dashboard');
        })->name('consultant.dashboard');
    });

    // User routes
    Route::prefix('users')->middleware('UserAccess:user')->group(function () {
        Route::get('', function () {
            return view('users/home');
        })->name('users.home');
        Route::get('/consult', function () {
            return view('users/consult');
        })->name('users.consult');
        Route::get('/legalpedia', function () {
            return view('users/legalpedia');
        })->name('users.legalpedia');
        Route::get('/forum', function () {
            return view('users/forum');
        })->name('users.forum');
        Route::get('/detailofconsultant', function () {
            return view('users/detailofconsultant');
        });
    });

    // Logout route
    Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
});





Route::get('/home', function () {
    return redirect('admin');
});

Route::fallback(function () {
    return redirect()->back()->with('error', 'Halaman yang Anda cari tidak ditemukan.');
});

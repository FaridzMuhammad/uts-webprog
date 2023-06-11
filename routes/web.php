<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CategoryController;

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

//login
Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login-proses', [SessionController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register-proses', [SessionController::class, 'register_proses'])->name('register-proses');

Route::get('/', function () {
    return view('login.login');
});

Route::group(['middleware' => ['auth.web']], function () {
    Route::get('/view/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //skill
    Route::get('/skill', [SkillController::class, 'index']);
    Route::post('/skill', [SkillController::class, 'create'])->name('skill.submit');
    Route::post('/skill/{id}', [SkillController::class, 'update'])->name('skill.update');
    Route::get('/skill/{id}', [SkillController::class, 'delete'])->name('skill.delete');
    //category
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category', [CategoryController::class, 'store'])->name('category.submit');
    Route::post('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');



//goggle
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

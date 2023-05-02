<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;

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

Route::get('/', function () {
    return view('login.login');
});

Route::get('/sesi',[SessionController::class,'index']);
Route::get('/admin/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::get('/admin/logout',[SessionController::class,'logout']);
Route::post('/admin/login',[SessionController::class,'login']);


//goggle
Route::prefix('google')->name('google.')->group(function(){
    Route::get('/login',[GoogleController::class,'loginWithGoogle'])->name('login');
    Route::any('/callback',[GoogleController::class,'callbackFromGoogle'])->name('callback');
});

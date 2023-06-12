<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryApiController;
use App\Http\Controllers\API\SkillApiController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::group([
    'middleware' => ['auth.api'],
], function ($router) {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    //category
    Route::get('/category', [CategoryApiController::class, 'index']);
    Route::post('/category', [CategoryApiController::class, 'store'])->name('api.category.submit');
    Route::post('/category/{id}', [CategoryApiController::class, 'update'])->name('api.category.update');
    Route::get('/category/{id}', [CategoryApiController::class, 'destroy'])->name('api.category.delete');
    //skill
    Route::get('/skill', [SkillApiController::class, 'index']);
    Route::post('/skill', [SkillApiController::class, 'store'])->name('api.skill.submit');
    Route::post('/skill/{id}', [SkillApiController::class, 'update'])->name('api.skill.update');
    Route::get('/skill/{id}', [SkillApiController::class, 'destroy'])->name('api.skill.delete');
});

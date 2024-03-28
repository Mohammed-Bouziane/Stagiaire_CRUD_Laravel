<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StagiaireController;
use App\Models\Stagiaire;

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
 
    Route::controller(StagiaireController::class)->prefix('stagiaires')->group(function () {
        Route::get('', 'index')->name('stagiaires');
        Route::get('create', 'create')->name('stagiaires.create');
        Route::post('store', 'store')->name('stagiaires.store');
        Route::get('show/{id}', 'show')->name('stagiaires.show');
        Route::get('edit/{id}', 'edit')->name('stagiaires.edit');
        Route::put('edit/{id}', 'update')->name('stagiaires.update');
        Route::delete('destroy/{id}', 'destroy')->name('stagiaires.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

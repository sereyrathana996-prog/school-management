<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-test', function () {
    return 'Welcome Admin!';
})->middleware(['auth', 'role:admin']);

Route::get('/register', Register::class)
    ->middleware('guest')
    ->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;

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
    return 'Welcome to Dashboard!';
})->middleware('auth')->name('dashboard');

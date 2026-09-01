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


Route::get('/admin/dashboard', function () {
    return 'Welcome Admin Dashboard!';
})->middleware(['auth', 'role:admin'])
  ->name('admin.dashboard');


Route::get('/teacher/dashboard', function () {
    return 'Welcome Teacher Dashboard!';
})->middleware(['auth', 'role:teacher'])
  ->name('teacher.dashboard');


Route::get('/student/dashboard', function () {
    return 'Welcome Student Dashboard!';
})->middleware(['auth', 'role:student'])
  ->name('student.dashboard');


Route::get('/parent/dashboard', function () {
    return 'Welcome Parent Dashboard!';
})->middleware(['auth', 'role:parent'])
  ->name('parent.dashboard');
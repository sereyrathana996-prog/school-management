<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Livewire\Students\Index as StudentsIndex;
use App\Livewire\Students\Create as StudentsCreate;
use App\Livewire\Students\Edit as StudentsEdit;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-test', function () {
    return 'Welcome Admin!';
})->middleware(['auth', 'role:admin']);

//index
Route::get('/admin/students', StudentsIndex::class)
    ->middleware(['auth', 'role:admin'])
    ->name('students.index');

//create
Route::get('/admin/students/create', StudentsCreate::class)
    ->middleware(['auth', 'role:admin'])
    ->name('students.create');

//edit
Route::get('/admin/students/{student}/edit', StudentsEdit::class)
    ->middleware(['auth', 'role:admin'])
    ->name('students.edit');


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
    return view('dashboards.admin');
})->middleware(['auth', 'role:admin'])
  ->name('admin.dashboard');

Route::get('/teacher/dashboard', function () {
    return view('dashboards.teacher');
})->middleware(['auth', 'role:teacher'])
  ->name('teacher.dashboard');

Route::get('/student/dashboard', function () {
    return view('dashboards.student');
})->middleware(['auth', 'role:student'])
  ->name('student.dashboard');


Route::get('/parent/dashboard', function () {
    return view('dashboards.parent');
})->middleware(['auth', 'role:parent'])
  ->name('parent.dashboard');
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
<<<<<<< Updated upstream
=======
    $src = 'C:/Users/ASUS/.gemini/antigravity-ide/brain/9196cc7c-5ffc-431c-b338-cf2ba62c9f86/hero_students_school_1788491557685.jpg';
    $loginSrc = 'C:/Users/ASUS/.gemini/antigravity-ide/brain/9196cc7c-5ffc-431c-b338-cf2ba62c9f86/login_illustration_books_1789141835354.jpg';
    $destDir = public_path('images');
    if (!file_exists($destDir)) {
        @mkdir($destDir, 0777, true);
    }
    if (file_exists($src) && !file_exists(public_path('images/hero_students.jpg'))) {
        @copy($src, public_path('images/hero_students.jpg'));
    }
    if (file_exists($loginSrc) && !file_exists(public_path('images/login_illustration.jpg'))) {
        @copy($loginSrc, public_path('images/login_illustration.jpg'));
    }
>>>>>>> Stashed changes
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
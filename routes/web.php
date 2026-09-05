<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Students\Index as StudentIndex;
use App\Livewire\Students\Create as StudentCreate;
use App\Livewire\Students\Edit as StudentEdit;
use App\Livewire\Students\Show as StudentsShow;

use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Teacher\Dashboard as TeacherDashboard;
use App\Livewire\Students\Dashboard as StudentDashboard;
use App\Livewire\Parents\Dashboard as ParentDashboard;

Route::get('/', function () {
    $src = 'C:/Users/ASUS/.gemini/antigravity-ide/brain/9196cc7c-5ffc-431c-b338-cf2ba62c9f86/hero_students_school_1788491557685.jpg';
    $destDir = public_path('images');
    if (!file_exists($destDir)) {
        @mkdir($destDir, 0777, true);
    }
    if (file_exists($src) && !file_exists(public_path('images/hero_students.jpg'))) {
        @copy($src, public_path('images/hero_students.jpg'));
    }
    return view('welcome');
});

Route::get('/login', Login::class)
    ->middleware('guest')
    ->name('login');

Route::get('/register', Register::class)
    ->middleware('guest')
    ->name('register');

Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/admin-test', function () {
    return 'Welcome Admin!';
})->middleware(['auth', 'role:admin']);

// Role-based Dashboards & Management Routes
Route::middleware('auth')->group(function () {

    // Central dashboard router
    Route::get('/dashboard', function () {
        $role = Auth::user()->role;
        return match ($role) {
            'admin' => redirect()->route('admin.dashboard'),
            'teacher' => redirect()->route('teacher.dashboard'),
            'student' => redirect()->route('student.dashboard'),
            'parent' => redirect()->route('parent.dashboard'),
            default => redirect()->route('admin.dashboard'),
        };
    })->name('dashboard');

    // Admin Routes
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');

        // Student Management Routes
        Route::get('/students', StudentIndex::class)->name('students.index');
        Route::get('/students/create', StudentCreate::class)->name('students.create');
        Route::get('/students/{student}/edit', StudentEdit::class)->name('students.edit');
        Route::get('/students/{student}', StudentsShow::class)->name('students.show');
    });

    // Teacher Dashboard
    Route::get('/teacher/dashboard', TeacherDashboard::class)
        ->middleware('role:teacher')
        ->name('teacher.dashboard');

    // Student Dashboard
    Route::get('/student/dashboard', StudentDashboard::class)
        ->middleware('role:student')
        ->name('student.dashboard');

    // Parent Dashboard
    Route::get('/parent/dashboard', ParentDashboard::class)
        ->middleware('role:parent')
        ->name('parent.dashboard');
});
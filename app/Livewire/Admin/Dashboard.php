<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\SchoolClass;
use App\Models\Subject;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalStudents = Student::count();
        $totalTeachers = Teacher::count();
        $totalClasses = SchoolClass::count();
        $totalSubjects = Subject::count();

        return view('livewire.admin.dashboard', [
            'totalStudents' => $totalStudents,
            'totalTeachers' => $totalTeachers,
            'totalClasses' => $totalClasses,
            'totalSubjects' => $totalSubjects,
        ])->layout('components.layouts.dashboard', ['title' => 'Dashboard']);
    }
}
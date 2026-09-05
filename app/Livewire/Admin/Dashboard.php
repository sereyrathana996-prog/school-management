<?php

namespace App\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalStudents = Student::count();

        return view('livewire.admin.dashboard', [
            'totalStudents' => $totalStudents,
        ])->layout('components.layouts.dashboard', ['title' => 'Admin Dashboard']);
    }
}
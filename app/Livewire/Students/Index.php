<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $students = Student::latest()->get();

        return view('livewire.students.index', [
            'students' => $students,
        ])->layout('layouts.app');
    }
}

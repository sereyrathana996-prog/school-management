<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{

        public function delete($studentId)
    {
        $student = Student::findOrFail($studentId);

        $student->delete();

        session()->flash('success', 'Student deleted successfully.');

        return $this->redirectRoute('students.index');

    }

    
    public function render()
    {
        
        $students = Student::latest()->get();

        return view('livewire.students.index', [
            'students' => $students,
        ])->layout('layouts.app');
    }
}

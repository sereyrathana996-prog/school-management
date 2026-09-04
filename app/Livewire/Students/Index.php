<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{
    public string $search = '';

    public function delete($studentId)
    {
        $student = Student::findOrFail($studentId);

        $student->delete();

        session()->flash('success', 'Student deleted successfully.');

        return $this->redirectRoute('students.index');
    }
  
    public function render()
    {
        $students = Student::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('student_id', 'like', '%' . $this->search . '%')
                        ->orWhere('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%')
                        ->orWhere('phone', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->get();

        return view('livewire.students.index', [
            'students' => $students,
        ])->layout('components.layouts.dashboard', ['title' => 'Student Management']);
    }
}

<?php

namespace App\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Show extends Component
{
    public Teacher $teacher;

    public function mount(Teacher $teacher)
    {
        $this->teacher = $teacher;
    }

    public function render()
    {
        return view('livewire.teachers.show')
            ->layout('components.layouts.dashboard', ['title' => 'Teacher Profile']);
    }
}

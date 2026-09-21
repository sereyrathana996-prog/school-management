<?php

namespace App\Livewire\Exams;

use App\Models\Exam;
use Livewire\Component;

class Show extends Component
{
    public Exam $exam;

    public function mount(Exam $exam)
    {
        $this->exam = $exam;
    }

    public function render()
    {
        return view('livewire.exams.show')
            ->layout('components.layouts.dashboard', ['title' => 'Exam Details']);
    }
}

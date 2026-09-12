<?php

namespace App\Livewire\Subjects;

use App\Models\Subject;
use Livewire\Component;

class Show extends Component
{
    public Subject $subject;

    public function mount(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function render()
    {
        return view('livewire.subjects.show')
            ->layout('components.layouts.dashboard', ['title' => 'Subject Details']);
    }
}

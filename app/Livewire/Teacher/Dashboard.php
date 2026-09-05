<?php

namespace App\Livewire\Teacher;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.teacher.dashboard')
            ->layout('components.layouts.dashboard', ['title' => 'Teacher Dashboard']);
    }
}

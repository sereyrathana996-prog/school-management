<?php

namespace App\Livewire\Students;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.students.dashboard')
            ->layout('components.layouts.dashboard', ['title' => 'Student Dashboard']);
    }
}

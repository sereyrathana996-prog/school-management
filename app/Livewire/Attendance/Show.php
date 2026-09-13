<?php

namespace App\Livewire\Attendance;

use App\Models\Attendance;
use Livewire\Component;

class Show extends Component
{
    public Attendance $attendance;

    public function mount(Attendance $attendance)
    {
        $this->attendance = $attendance->load('student');
    }

    public function render()
    {
        return view('livewire.attendance.show')
            ->layout('components.layouts.dashboard', ['title' => 'Attendance Details']);
    }
}

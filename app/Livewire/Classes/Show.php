<?php

namespace App\Livewire\Classes;

use App\Models\SchoolClass;
use Livewire\Component;

class Show extends Component
{
    public SchoolClass $schoolClass;

    public function mount(SchoolClass $schoolClass)
    {
        $this->schoolClass = $schoolClass;
    }

    public function render()
    {
        return view('livewire.classes.show')
            ->layout('components.layouts.dashboard', ['title' => 'Class Details']);
    }
}

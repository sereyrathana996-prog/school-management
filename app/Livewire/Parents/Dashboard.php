<?php

namespace App\Livewire\Parents;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.parents.dashboard')
            ->layout('components.layouts.dashboard', ['title' => 'Parent Dashboard']);
    }
}

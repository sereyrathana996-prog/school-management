<?php

namespace App\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $teachers = Teacher::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('teacher_id', 'like', '%' . $this->search . '%')
                        ->orWhere('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%')
                        ->orWhere('phone', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.teachers.index', [
            'teachers' => $teachers,
        ])->layout('layouts.dashboard');
    }
}
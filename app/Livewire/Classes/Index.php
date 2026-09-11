<?php

namespace App\Livewire\Classes;

use App\Models\SchoolClass;
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

    public function delete($classId)
    {
        $class = SchoolClass::findOrFail($classId);
        $class->delete();

        session()->flash('success', 'Class deleted successfully.');
    }

    public function render()
    {
        $classes = SchoolClass::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('class_code', 'like', '%' . $this->search . '%')
                        ->orWhere('name', 'like', '%' . $this->search . '%')
                        ->orWhere('grade_level', 'like', '%' . $this->search . '%')
                        ->orWhere('section', 'like', '%' . $this->search . '%')
                        ->orWhere('academic_year', 'like', '%' . $this->search . '%')
                        ->orWhere('room', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.classes.index', [
            'classes' => $classes,
        ])->layout('components.layouts.dashboard', ['title' => 'Classes']);
    }
}

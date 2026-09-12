<?php

namespace App\Livewire\Subjects;

use App\Models\Subject;
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

    public function delete($subjectId)
    {
        $subject = Subject::findOrFail($subjectId);
        $subject->delete();

        session()->flash('success', 'Subject deleted successfully.');
    }

    public function render()
    {
        $subjects = Subject::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('subject_code', 'like', '%' . $this->search . '%')
                        ->orWhere('name', 'like', '%' . $this->search . '%')
                        ->orWhere('grade_level', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.subjects.index', [
            'subjects' => $subjects,
        ])->layout('components.layouts.dashboard', ['title' => 'Subjects']);
    }
}

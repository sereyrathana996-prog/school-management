<?php

namespace App\Livewire\Exams;

use App\Models\Exam;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status_filter = 'all';
    public string $type_filter = 'all';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedStatusFilter()
    {
        $this->resetPage();
    }

    public function updatedTypeFilter()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->status_filter = 'all';
        $this->type_filter = 'all';
        $this->resetPage();
    }

    public function delete($examId)
    {
        $exam = Exam::findOrFail($examId);
        $exam->delete();

        session()->flash('success', 'Exam deleted successfully.');
    }

    public function render()
    {
        $exams = Exam::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('exam_code', 'like', '%' . $this->search . '%')
                        ->orWhere('name', 'like', '%' . $this->search . '%')
                        ->orWhere('academic_year', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status_filter !== 'all', function ($query) {
                $query->where('status', $this->status_filter);
            })
            ->when($this->type_filter !== 'all', function ($query) {
                $query->where('exam_type', $this->type_filter);
            })
            ->latest('start_date')
            ->latest('id')
            ->paginate(10);

        return view('livewire.exams.index', [
            'exams' => $exams,
        ])->layout('components.layouts.dashboard', ['title' => 'Exams']);
    }
}

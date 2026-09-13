<?php

namespace App\Livewire\Attendance;

use App\Models\Attendance;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    public string $date_filter = '';
    public string $status_filter = 'all';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedDateFilter()
    {
        $this->resetPage();
    }

    public function updatedStatusFilter()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->date_filter = '';
        $this->status_filter = 'all';
        $this->resetPage();
    }

    public function delete($attendanceId)
    {
        $attendance = Attendance::findOrFail($attendanceId);
        $attendance->delete();

        session()->flash('success', 'Attendance record deleted successfully.');
    }

    public function render()
    {
        $attendances = Attendance::with('student')
            ->when($this->search, function ($query) {
                $query->whereHas('student', function ($q) {
                    $q->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%')
                        ->orWhere('student_id', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->date_filter, function ($query) {
                $query->whereDate('date', $this->date_filter);
            })
            ->when($this->status_filter !== 'all', function ($query) {
                $query->where('status', $this->status_filter);
            })
            ->latest('date')
            ->latest('id')
            ->paginate(10);

        return view('livewire.attendance.index', [
            'attendances' => $attendances,
        ])->layout('components.layouts.dashboard', ['title' => 'Attendance List']);
    }
}

<?php

namespace App\Livewire\Attendance;

use App\Models\Attendance;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    public Attendance $attendance;

    public ?int $student_id = null;
    public string $date = '';
    public string $status = 'present';
    public string $note = '';

    public function mount(Attendance $attendance)
    {
        $this->attendance = $attendance;
        $this->student_id = $attendance->student_id;
        $this->date = $attendance->date ? $attendance->date->format('Y-m-d') : '';
        $this->status = $attendance->status;
        $this->note = $attendance->note ?? '';
    }

    protected function rules()
    {
        return [
            'student_id' => [
                'required',
                'exists:students,id',
                Rule::unique('attendances', 'student_id')
                    ->where(function ($query) {
                        return $query->where('date', $this->date);
                    })
                    ->ignore($this->attendance->id),
            ],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:present,absent,late,excused'],
            'note' => ['nullable', 'string', 'max:500'],
        ];
    }

    protected array $messages = [
        'student_id.unique' => 'Attendance for this student on the selected date has already been recorded.',
    ];

    public function update()
    {
        $validated = $this->validate();

        $this->attendance->update($validated);

        session()->flash('success', 'Attendance record updated successfully.');

        return $this->redirect(route('attendance.index'), navigate: true);
    }

    public function render()
    {
        $students = Student::orderBy('first_name')->get();

        return view('livewire.attendance.edit', [
            'students' => $students,
        ])->layout('components.layouts.dashboard', ['title' => 'Edit Attendance']);
    }
}

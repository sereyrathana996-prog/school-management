<?php

namespace App\Livewire\Attendance;

use App\Models\Attendance;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Create extends Component
{
    public ?int $student_id = null;
    public string $date = '';
    public string $status = 'present';
    public string $note = '';

    public function mount()
    {
        $this->date = now()->toDateString();
    }

    protected function rules()
    {
        return [
            'student_id' => [
                'required',
                'exists:students,id',
                Rule::unique('attendances', 'student_id')->where(function ($query) {
                    return $query->where('date', $this->date);
                }),
            ],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:present,absent,late,excused'],
            'note' => ['nullable', 'string', 'max:500'],
        ];
    }

    protected array $messages = [
        'student_id.unique' => 'Attendance for this student on the selected date has already been marked.',
    ];

    public function save()
    {
        $validated = $this->validate();

        Attendance::create($validated);

        session()->flash('success', 'Attendance marked successfully.');

        return $this->redirect(route('attendance.index'), navigate: true);
    }

    public function render()
    {
        $students = Student::orderBy('first_name')->get();

        return view('livewire.attendance.create', [
            'students' => $students,
        ])->layout('components.layouts.dashboard', ['title' => 'Mark Attendance']);
    }
}

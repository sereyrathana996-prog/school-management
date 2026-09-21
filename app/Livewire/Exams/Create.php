<?php

namespace App\Livewire\Exams;

use App\Models\Exam;
use Livewire\Component;

class Create extends Component
{
    public string $exam_code = '';
    public string $name = '';
    public string $exam_type = 'midterm';
    public string $academic_year = '';
    public string $start_date = '';
    public string $end_date = '';
    public string $description = '';
    public string $status = 'upcoming';

    public function mount()
    {
        $this->academic_year = date('Y') . '-' . (date('Y') + 1);
        $this->start_date = now()->toDateString();
    }

    protected function rules()
    {
        return [
            'exam_code' => ['required', 'string', 'max:50', 'unique:exams,exam_code'],
            'name' => ['required', 'string', 'max:255'],
            'exam_type' => ['required', 'in:midterm,final,quiz,other'],
            'academic_year' => ['required', 'string', 'max:20'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'in:upcoming,ongoing,completed,cancelled'],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Exam::create($validated);

        session()->flash('success', 'Exam created successfully.');

        return $this->redirect(route('exams.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.exams.create')
            ->layout('components.layouts.dashboard', ['title' => 'Create Exam']);
    }
}

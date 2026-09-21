<?php

namespace App\Livewire\Exams;

use App\Models\Exam;
use Livewire\Component;

class Edit extends Component
{
    public Exam $exam;

    public string $exam_code = '';
    public string $name = '';
    public string $exam_type = 'midterm';
    public string $academic_year = '';
    public string $start_date = '';
    public string $end_date = '';
    public string $description = '';
    public string $status = 'upcoming';

    public function mount(Exam $exam)
    {
        $this->exam = $exam;
        $this->exam_code = $exam->exam_code;
        $this->name = $exam->name;
        $this->exam_type = $exam->exam_type;
        $this->academic_year = $exam->academic_year;
        $this->start_date = $exam->start_date ? $exam->start_date->format('Y-m-d') : '';
        $this->end_date = $exam->end_date ? $exam->end_date->format('Y-m-d') : '';
        $this->description = $exam->description ?? '';
        $this->status = $exam->status;
    }

    protected function rules()
    {
        return [
            'exam_code' => ['required', 'string', 'max:50', 'unique:exams,exam_code,' . $this->exam->id],
            'name' => ['required', 'string', 'max:255'],
            'exam_type' => ['required', 'in:midterm,final,quiz,other'],
            'academic_year' => ['required', 'string', 'max:20'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date', 'after_or_equal:start_date'],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'in:upcoming,ongoing,completed,cancelled'],
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->exam->update($validated);

        session()->flash('success', 'Exam updated successfully.');

        return $this->redirect(route('exams.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.exams.edit')
            ->layout('components.layouts.dashboard', ['title' => 'Edit Exam']);
    }
}

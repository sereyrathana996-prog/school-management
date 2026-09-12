<?php

namespace App\Livewire\Subjects;

use App\Models\Subject;
use Livewire\Component;

class Edit extends Component
{
    public Subject $subject;

    public string $subject_code = '';
    public string $name = '';
    public string $description = '';
    public string $grade_level = '';
    public int $credit_hours = 1;
    public string $status = 'active';

    public function mount(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject_code = $subject->subject_code;
        $this->name = $subject->name;
        $this->description = $subject->description ?? '';
        $this->grade_level = $subject->grade_level ?? '';
        $this->credit_hours = (int) $subject->credit_hours;
        $this->status = $subject->status;
    }

    protected function rules()
    {
        return [
            'subject_code' => ['required', 'string', 'max:50', 'unique:subjects,subject_code,' . $this->subject->id],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'grade_level' => ['nullable', 'string', 'max:50'],
            'credit_hours' => ['required', 'integer', 'min:1', 'max:10'],
            'status' => ['required', 'in:active,inactive'],
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->subject->update($validated);

        session()->flash('success', 'Subject updated successfully.');

        return $this->redirect(route('subjects.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.subjects.edit')
            ->layout('components.layouts.dashboard', ['title' => 'Edit Subject']);
    }
}

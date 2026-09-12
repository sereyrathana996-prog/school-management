<?php

namespace App\Livewire\Subjects;

use App\Models\Subject;
use Livewire\Component;

class Create extends Component
{
    public string $subject_code = '';
    public string $name = '';
    public string $description = '';
    public string $grade_level = '';
    public int $credit_hours = 1;
    public string $status = 'active';

    protected function rules()
    {
        return [
            'subject_code' => ['required', 'string', 'max:50', 'unique:subjects,subject_code'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'grade_level' => ['nullable', 'string', 'max:50'],
            'credit_hours' => ['required', 'integer', 'min:1', 'max:10'],
            'status' => ['required', 'in:active,inactive'],
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Subject::create($validated);

        session()->flash('success', 'Subject created successfully.');

        return $this->redirect(route('subjects.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.subjects.create')
            ->layout('components.layouts.dashboard', ['title' => 'Create Subject']);
    }
}

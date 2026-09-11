<?php

namespace App\Livewire\Classes;

use App\Models\SchoolClass;
use Livewire\Component;

class Edit extends Component
{
    public SchoolClass $schoolClass;

    public string $class_code = '';
    public string $name = '';
    public string $grade_level = '';
    public ?string $section = null;
    public string $academic_year = '';
    public ?string $room = null;
    public int $capacity = 30;
    public string $status = 'active';

    public function mount(SchoolClass $schoolClass)
    {
        $this->schoolClass = $schoolClass;

        $this->class_code = $schoolClass->class_code;
        $this->name = $schoolClass->name;
        $this->grade_level = $schoolClass->grade_level;
        $this->section = $schoolClass->section;
        $this->academic_year = $schoolClass->academic_year;
        $this->room = $schoolClass->room;
        $this->capacity = $schoolClass->capacity;
        $this->status = $schoolClass->status;
    }

    protected function rules(): array
    {
        return [
            'class_code' => [
                'required',
                'string',
                'max:50',
                'unique:classes,class_code,' . $this->schoolClass->id,
            ],
            'name' => 'required|string|max:255',
            'grade_level' => 'required|string|max:50',
            'section' => 'nullable|string|max:50',
            'academic_year' => 'required|string|max:50',
            'room' => 'nullable|string|max:50',
            'capacity' => 'required|integer|min:1|max:200',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->schoolClass->update($validated);

        session()->flash('success', 'Class updated successfully.');

        return $this->redirectRoute('classes.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.classes.edit')
            ->layout('components.layouts.dashboard', ['title' => 'Edit Class']);
    }
}

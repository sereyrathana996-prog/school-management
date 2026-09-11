<?php

namespace App\Livewire\Classes;

use App\Models\SchoolClass;
use Livewire\Component;

class Create extends Component
{
    public string $class_code = '';
    public string $name = '';
    public string $grade_level = '';
    public ?string $section = null;
    public string $academic_year = '2025-2026';
    public ?string $room = null;
    public int $capacity = 30;
    public string $status = 'active';

    protected function rules(): array
    {
        return [
            'class_code' => 'required|string|max:50|unique:classes,class_code',
            'name' => 'required|string|max:255',
            'grade_level' => 'required|string|max:50',
            'section' => 'nullable|string|max:50',
            'academic_year' => 'required|string|max:50',
            'room' => 'nullable|string|max:50',
            'capacity' => 'required|integer|min:1|max:200',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        SchoolClass::create($validated);

        session()->flash('success', 'Class created successfully.');

        return $this->redirectRoute('classes.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.classes.create')
            ->layout('components.layouts.dashboard', ['title' => 'Add New Class']);
    }
}

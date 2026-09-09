<?php

namespace App\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Create extends Component
{
    public string $teacher_id = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $gender = '';
    public ?string $date_of_birth = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $address = null;
    public ?string $specialization = null;

    protected function rules(): array
    {
        return [
            'teacher_id' => 'required|string|max:50|unique:teachers,teacher_id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255|unique:teachers,email',
            'address' => 'nullable|string',
            'specialization' => 'nullable|string|max:255',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Teacher::create($validated);

        session()->flash('success', 'Teacher created successfully.');

        return $this->redirectRoute('teachers.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.teachers.create')
            ->layout('components.layouts.dashboard', ['title' => 'Add New Teacher']);
    }
}
<?php

namespace App\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;

class Edit extends Component
{
    public Teacher $teacher;

    public string $teacher_id = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $gender = '';
    public ?string $date_of_birth = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $address = null;
    public ?string $specialization = null;

    public function mount(Teacher $teacher)
    {
        $this->teacher = $teacher;

        $this->teacher_id = $teacher->teacher_id;
        $this->first_name = $teacher->first_name;
        $this->last_name = $teacher->last_name;
        $this->gender = $teacher->gender;
        $this->date_of_birth = $teacher->date_of_birth;
        $this->phone = $teacher->phone;
        $this->email = $teacher->email;
        $this->address = $teacher->address;
        $this->specialization = $teacher->specialization;
    }

    protected function rules(): array
    {
        return [
            'teacher_id' => [
                'required',
                'string',
                'max:50',
                'unique:teachers,teacher_id,' . $this->teacher->id,
            ],
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'email' => [
                'nullable',
                'email',
                'max:255',
                'unique:teachers,email,' . $this->teacher->id,
            ],
            'address' => 'nullable|string',
            'specialization' => 'nullable|string|max:255',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->teacher->update($validated);

        session()->flash('success', 'Teacher updated successfully.');

        return $this->redirectRoute('teachers.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.teachers.edit')
            ->layout('components.layouts.dashboard', ['title' => 'Edit Teacher']);
    }
}

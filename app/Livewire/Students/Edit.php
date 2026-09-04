<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class Edit extends Component
{
    public Student $student;

    public string $student_id = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $gender = '';
    public ?string $date_of_birth = null;
    public ?string $phone = null;
    public ?string $address = null;

    public function mount(Student $student)
    {
        $this->student = $student;

        $this->student_id = $student->student_id;
        $this->first_name = $student->first_name;
        $this->last_name = $student->last_name;
        $this->gender = $student->gender;
        $this->date_of_birth = $student->date_of_birth;
        $this->phone = $student->phone;
        $this->address = $student->address;
    }

    protected function rules(): array
    {
        return [
            'student_id' => [
                'required',
                'string',
                'max:50',
                'unique:students,student_id,' . $this->student->id,
            ],
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ];
    }

    public function update()
    {
        $validated = $this->validate();

        $this->student->update($validated);

        session()->flash('success', 'Student updated successfully.');

        return $this->redirectRoute('students.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.students.edit')
            ->layout('components.layouts.dashboard', ['title' => 'Edit Student']);
    }
}

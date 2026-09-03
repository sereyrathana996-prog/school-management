<?php

namespace App\Livewire\Students;
use App\Models\Student;
use Livewire\Component;

class Create extends Component
{

    public string $student_id = '';
    public string $first_name = '';
    public string $last_name = '';
    public string $gender = '';
    public ?string $date_of_birth = null;
    public ?string $phone = null;
    public ?string $address = null;

    protected function rules(): array
    {
        return [
            'student_id' => 'required|string|max:50|unique:students,student_id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Student::create($validated);

        session()->flash('success', 'Student created successfully.');

        return $this->redirectRoute('students.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.students.create')
            ->layout('layouts.app');
    }
}

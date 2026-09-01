<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            $this->addError('email', 'The provided credentials are incorrect.');

            return;
        }

        session()->regenerate();

        $user = Auth::user();

        return match ($user->role) {
            'admin' => $this->redirect('/admin/dashboard', navigate: true),
            'teacher' => $this->redirect('/teacher/dashboard', navigate: true),
            'student' => $this->redirect('/student/dashboard', navigate: true),
            'parent' => $this->redirect('/parent/dashboard', navigate: true),
            default => $this->redirect('/dashboard', navigate: true),
        };
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.app');
    }
}
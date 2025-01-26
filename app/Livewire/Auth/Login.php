<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $login_error;
    #[Layout('components.layouts.login-layout')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {

        $this->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);
        try {
            $login_success = Auth::attempt([
                'email' => $this->email,
                'password' => $this->password,
            ]);

            if ($login_success === true) {
                return redirect()->route('dashboard');
            }
            $this->addError('login_error', 'Invalid email or password');
        } catch (\Exception $e) {
            $this->addError('login_error', 'Invalid email or password');
        }
    }
}

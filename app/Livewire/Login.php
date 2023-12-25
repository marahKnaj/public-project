<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login');
    }
    public function loginUser(Request $request){
        $validated=$this->validate([

            'email'=>'required|',
            'password'=>'required|max:255',
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return $this->redirect('/customers',navigate:true);
            $this->addError('email','the password provided does not match the email');
        }
    }
}

<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Register extends Component
{
public $name;
public $email;
public $password;

    public function render()
    {
        return view('livewire.register');
    }
    public function storeUser(){
        $validated=$this->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|max:255',
        ]);
        $user=User::create([
     'name'=>$this->name,
     'email'=>$this->email,
     'password'=>bcrypt($this->password),
        ]);
        Auth::login($user);
        session()->flash('success','Registeration successful');
        return $this->redirect('/customers',navigate:true);
    }
}

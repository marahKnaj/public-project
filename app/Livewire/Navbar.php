<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar');
    }
    public function logoutlivewire(Request $request){
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regenerateToken();
           return $this->redirect('/LoginLivewire',navigate:true);

    }
}

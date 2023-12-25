<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;
class CreateCustomer extends Component
{

public $name='';
public $email='';
public $phone='';
    public function render()
    {
        return view('livewire.create-customer');
    }
    public function save(){
        $validated=$this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        customer::create($validated);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;

class EditCustomers extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;

    public function mount(customer $customer){
        $this->customer=$customer;
        $this->name=$customer->name;
        $this->email=$customer->email;
        $this->phone=$customer->phone;
    }
    public function render()
    {
        return view('livewire.edit-customers');
    }
public function updateCustomer(){
    $validated=$this->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
    ]);
   $this->customer->update($validated);
   session()->flash('success','customer updated successfult');
   return $this->redirect('/customers',navigate:true);
}

}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;
use Auth;
class Customers extends Component
{
    public $customers=[];
    public $search='';

    public function mount(){
        $this->customers=customer::all();
    }
    public function render()
    {

        if(! $this->search){
            $this->customers=customer::all();
        }
        else{
            $this->customers=customer::where('name','like','%'.$this->search.'%')->get();
        }
        return view('livewire.customers');
    }

    public function deleteCustomers(customer $customer){
     $customer->delete();
    }
}

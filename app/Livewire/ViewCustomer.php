<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\customer;
class ViewCustomer extends Component
{
    public $customer=[];
    public function mount(customer $customer){
        $this->customer=$customer;
    }
    public function render()
    {
        return view('livewire.view-customer');
    }
}

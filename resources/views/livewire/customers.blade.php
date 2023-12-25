<div>
    <div class="col-auto">
        <button wire:navigate href="/customer/create" class="btn btn-success btn-sm mt-3">create</button>

    </div>
    <div class="col-3 mt-3 mb-3">
        <input  wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="searh customers">
    </div>
  <livewire:flash_message/>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">phone</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    @foreach ($customers as $customer)
<tr>
    <th scope="row">{{ $customer->id }}</th>
    <td>{{ $customer->name }}</td>
    <td>{{ $customer->email }}</td>
    <td>{{ $customer->phone }}</td>

   <td> <button wire:navigate href="/customers/{{ $customer->id }}" class="btn btn-primary btn-sm">View</button>
    <button wire:navigate href="/customers/{{ $customer->id}}" class="btn btn-success btn-sm">Edit</button>
    <button wire:click="deleteCustomers({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button></td>
</tr>
    @endforeach
</table>
</div>

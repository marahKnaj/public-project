

<div class="card offset-3 col-6">
    <div class="card-header">

    <div class="card_body">
    <form wire:submit="updateCustomer">
    <div class="mb-3">
    <label for="exampleInputEmail" class="form_label">name</label>
    <input wire:model="name" type="text" class="form-control">
    </div>
    <div>
        @error('name')
    <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">email</label>
        <input wire:model="email" type="email" class="form-control" id="exampleInputEmail">
        </div>
        <div>
            @error('name')
        <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">phone</label>
            <input wire:model="phone" type="text" class="form-control">
            </div>
            <div>
                @error('name')
            <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    <button  wire:navigate href="/customers" class="btn btn-secondary">back</button>
    <button type="submit" class="btn btn-primary">submit</button>
    </form>






    </div>
    </div>




    </div>

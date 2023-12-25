<div class="card offset-3 col-6">
    <div class="card-header">

    <div class="card_body">
    <form wire:submit="storeUser">
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
            <label for="exampleInputEmail" class="form-label">password</label>
            <input wire:model="password" type="password" class="form-control">
            </div>
            <div>
                @error('password')
            <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
    <button  class="btn btn-primary">Register</button>

    </form>

<div class="mb-3">
    Already have an acount?
    <button wire:navigate href="/login" class="btn btn-primary">login</button>
</div>




    </div>
    </div>

<div class="card offset-3 col-6">
    <div class="card-header">
Login
    <div class="card_body">
    <form wire:submit="loginUser">

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
    <button  class="btn btn-primary">login</button>

    </form>

<div class="mb-3">
  Don't have any acount???
    <button wire:navigate href="/registerLivewire" class="btn btn-primary">register</button>
</div>




    </div>
    </div>

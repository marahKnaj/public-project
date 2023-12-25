<div class="card offset-card col-6">
<h5 class="card-header">view customr</h5>
    <div class="card-body">
        <h5 class="card-title">
{{ $customer->name }}
        </h5>
        <p class="card-text">{{ $customer->email }}</p>
        <p class="card-text">{{ $customer->phone }}</p>

        <a wire:navigate href="/customers" class="btn btn-primary">back</a>
    </div>



</div>

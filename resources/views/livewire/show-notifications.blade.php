<div class="card offset-card col-6">
    <h5 class="card-header">view notification</h5>
        <div class="card-body">
            <h5 class="card-title">
                notification
            </h5>
            <ul>
                @foreach($unreadMessages as $notification)
                    <li>
                        {{ $notification->message }}
                       
                    </li>
                @endforeach
            </ul>


            <a wire:navigate href="/notifications" class="btn btn-primary">back</a>
        </div>



    </div>

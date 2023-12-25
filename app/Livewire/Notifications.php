<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\notifaction;
use App\Models\category;
use App\Livewire\Notifications;
class Notifications extends Component
{


    public $name;
    public $notifaction;

    public $unreadNotificationsCount;

public function mount()
{
    $this->pollingInterval = 10;
    $this->unreadNotificationsCount =notifaction::where('messageStatus', false)->count();
}



// public function updated()
// {
//     $this->emit('notificationsUpdated');
// }
public function showNotifications()
{

    $notifications = notifaction::where('messageStatus', false)->get();

    return view('livewire.customers', [
        'notifications' => $notifications
    ]);
}

// public function showNotifications()
// {
//     $notifications = notification::all(); // استعادة جميع الإشعارات من قاعدة البيانات
//     $this->emit('displayNotifications', $notifications);
// }

public function markAsRead($notificationId)
{
    $notification = notifaction::find($notificationId);
    $notification->messageStatus = true;
    $notification->save();

    $unreadNotificationsCount = notifaction::where('messageStatus', false)->count();
}

public function render()
{
   //  $unreadNotifications = category::where('notified', false)->get();
     $unreadMessages = notifaction::where('messageStatus', 'false')->get();

    // $notifications = notifaction::orderBy('created_at', 'desc')->get();
        return view('livewire.notifications', [
            // 'notifications' => $notifications,

            'unreadMessages'=>$unreadMessages,
        ]);

}
}

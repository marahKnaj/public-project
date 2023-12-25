<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\notifaction;
use App\Livewire\Notifications;
class ShowNotifications extends Component
{
    public $notifactions=[];

    public function mount(){
        $this->notifactions=notifaction::all();
    }
    public function markAsRead($notificationId)
    {
        $notification = notifaction::find($notificationId);
        $notification->messageStatus = true;
        $notification->save();

        $unreadNotificationsCount = notifaction::where('messageStatus', false)->count();
    }

    public function render()
    {
        $unreadMessages = notifaction::get();
        return view('livewire.show-notifications',['unreadMessages'=>$unreadMessages,]);
    }
}

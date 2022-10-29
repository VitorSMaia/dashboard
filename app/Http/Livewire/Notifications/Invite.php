<?php

namespace App\Http\Livewire\Notifications;

use App\Models\User;
use App\Notifications\Invite as NotificationsInvite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Invite extends Component
{
    public function sendnotification()
    {
        $user = User::query()->findOrFail(1);
        $user->notify(new NotificationsInvite());
    }

    public function render()
    {
        return view('livewire.notifications.invite');
    }
}

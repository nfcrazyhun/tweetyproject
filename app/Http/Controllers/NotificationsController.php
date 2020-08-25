<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index(User $user)
    {
        $notifications = $user->unreadNotifications()->paginate(20);
        $notifications->markAsRead();
        return view('notifications.index', [
            'notifications' => $notifications
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notifications(Request $request)
    {

        $notifications = $request->user()->unreadNotifications;

        return response(compact('notifications'));

    }

    public function markAsRead(Request $request)
    {

        $notification = $request->user()->notifications->where('id', $request->id);

        if($notification){
            $notification->markAsRead();
        }

    }
}

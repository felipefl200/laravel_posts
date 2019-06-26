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

        $notifications = $request->user()->notifications;

//    dd($notifications);
        return response(compact('notifications'));

    }
}

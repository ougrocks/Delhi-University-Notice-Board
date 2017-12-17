<?php

namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function viewNotification()
    {
        $date = date('d-m-Y');
        $notification = Notifications::where('date',$date)->get();
        return view('notification', array('notification'=>$notification));
    }
}

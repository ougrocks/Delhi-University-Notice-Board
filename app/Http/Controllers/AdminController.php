<?php

namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showAdmin()
    {
        return view('admin');
    }
    public function insertNotification(Request $request)
    {
        $notification = new Notifications();
        $notification->teachername = $request->teachername;
        $notification->course = $request->course;
        $notification->custom=$request->custom;
        $notification->date=date('d-m-Y');
        $notification->save();
        $resp = 'Record submitted with ID: '.$notification->id;
        return view('done', array('resp'=>$resp));
    }
}

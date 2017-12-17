<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
class RegisterController extends Controller
{
    //
    public function showRegister()
    {
        return view('register');
    }
    public function doRegister(Request $request)
    {
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->course = $request->course;
        $user->college = $request->college;
        $user->roleid = '2';
        $user->save();

        
    }
}

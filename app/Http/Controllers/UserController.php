<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function getList()
    {
        $users = User::all();

        return view('app.userlist', ['users' => $users]);
    }

    public function getAdd()
    {
        return view('app.useradd');
    }

    public function postAdd(Request $request)
    {
        $user             = new User;
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->group      = $request->input('group');
        $user->gaji_pokok = $request->input('gaji_pokok');
        $user->password   = bcrypt($request->input('password'));
        $user->save();

        return "success!";
    }

    public function getEdit($id)
    {
        $user = User::find($id);
//        dd($user);
        return view('app.useredit', ['user' => $user]);
    }

    public function postEdit(Request $request)
    {
        $user = User::find($request->input('id'));
//        dd($user);
        if ($request->has('password')) {
            $user->name       = $request->input('name');
            $user->email      = $request->input('email');
            $user->group      = $request->input('group');
            $user->gaji_pokok = $request->input('gaji_pokok');
            $user->password   = bcrypt($request->input('password'));            
        }
        else {
            $user->name       = $request->input('name');
            $user->email      = $request->input('email');
            $user->group      = $request->input('group');
            $user->gaji_pokok = $request->input('gaji_pokok');
        }

        $user->save();

        return "Success";
    }
}
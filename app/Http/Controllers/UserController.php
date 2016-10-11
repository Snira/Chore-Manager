<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('manageusers', [ 'users' => $users ]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'users.email' => 'required',
            'users.name'  => 'required',

        ]);
        $password = str_random(10);
        $data = $request->input('users');
        $data['role'] = User::ROLE_USER;
        $data['password'] = $password;
        //This var $password will be sent with the email so the user will know what to login
        // and it will make a random password for every new user so it's also quite secure

        $user = User::create($data);

        return redirect()->route('chores.index');
    }
}

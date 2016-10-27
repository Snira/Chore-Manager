<?php

namespace App\Http\Controllers;

use App\Events\UserActivater;
use App\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        $users = User::withTrashed()->where('role', 'user')->orderBy('name')->get();

        return view('users.index', [ 'users' => $users ]);

    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'users.email' => 'required|email',
            'users.name'  => 'required',

        ]);
        $password = str_random(10);
        $data = $request->input('users');
        $data['role'] = User::ROLE_USER;
        $data['password'] = $password;
        //This var $password will be sent with the email so the user will know what to login with
        // and it will make a random password for every new user so it's also quite secure

        $user = User::create($data);

        Mail::send('mails.signup', [ 'user' => $user, 'password' => $password ], function ($m) use ($user) {
            $m->from('noreply@choremanager.nl', 'Choremanager');

            $m->to($user->email, $user->name)->subject('Welcome to Choremanager!');
        });

        return redirect()->route('user');
    }


    public function destroy($user)
    {
        $user = User::withTrashed()->find($user);
        $user->forceDelete();

        return redirect()->route('user');
    }


    public function activity($user)
    {
        $switchUser = User::withTrashed()->find($user);
        if ($switchUser->deleted_at) {
            $switchUser->restore();
            event(new UserActivater($user));
        } elseif ( ! $switchUser->deleted_at) {
            $switchUser->delete();
        }

        return redirect()->route('user');

    }


    public function profile()
    {
        $user = Auth::user();

        return view('profile',['user' => $user]);
    }
}

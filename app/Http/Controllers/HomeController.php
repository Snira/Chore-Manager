<?php

namespace App\Http\Controllers;
use App\User;
use App\Chore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $chores = Chore::all();
        $user  = Auth::user();
        if($user->role == 'user') {
            return view('home',['user' => $user, 'chores' => $chores]);
        }
        if($user->role == 'admin'){
            return view('adminhome',['user' => $user, 'allusers' => $users]);
        }

    }
}

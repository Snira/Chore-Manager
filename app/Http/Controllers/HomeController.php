<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Chore;
use App\User;

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
        $chores = Chore::all();
        $users = User::withTrashed()->where('role','user')->get();
        $choreCount = Chore::count();
        return view('home',['chores' => $chores, 'users' => $users, 'choreCount' => $choreCount]);
    }
}

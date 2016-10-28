<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Chore;
use App\User;
use Illuminate\Support\Facades\DB;

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
        $chores = Chore::query()
            ->with('users')
            ->get();

        $data = [];
        foreach ($chores as $chore) {
            foreach ($chore->users as $user) {
                $data[$user->pivot->day][$chore->name] = $user->name;
                // in $data[$user->pivot->day] zit de key met chore name en daaraan word de user gehangen
                // in de loop aan de beurt is.
            }
        }

        return view('home',['chores' => $chores, 'data' => $data]);
    }
}

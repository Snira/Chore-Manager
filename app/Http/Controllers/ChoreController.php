<?php

namespace App\Http\Controllers;

use App\Chore;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChoreController extends Controller
{

    public function index()
    {
        $chores = Chore::all();

        return view('chores.index', [ 'chores' => $chores ]);
    }

    public function create()
    {
        return view('chores.create');
    }
}

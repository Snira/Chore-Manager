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


    public function store(Request $request)
    {
        $this->validate($request, [
            'chores.name'        => 'required',
            'chores.description' => 'required',
        ]);

        $data = $request->input('chores');

        $chore = Chore::create($data);

        return redirect()->route('chore');

    }

    public function destroy($chore)
    {
        $chore = Chore::find($chore);
        $chore->delete();

        return redirect()->route('chore');
    }
}

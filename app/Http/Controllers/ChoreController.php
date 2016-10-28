<?php

namespace App\Http\Controllers;

use App\Chore;
use Illuminate\Http\Request;
use App\Events\BuildTable;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

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

        event(new BuildTable);

        return redirect()->route('chore');

    }


    public function destroy($chore)
    {

        $chore = Chore::find($chore);
        $chore->delete();

        event(new BuildTable);

        return redirect()->route('chore');
    }


    public function searched(Request $request)
    {
        $searched = $request->input('search');

        $chores = Chore::where('name', 'like', '%'.$searched.'%')->orWhere('description', 'like',
                '%'.$searched.'%')->get();

        if(sizeof($chores) == 0){
            return redirect()->route('chore')->with('message','No specific results found');
        }
        return view('chores.index', [ 'chores' => $chores ]);

    }
}

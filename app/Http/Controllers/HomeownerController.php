<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homeowner;

class HomeownerController extends Controller
{
    public function index()
    {
        $homeowners = Homeowner::all();
        return view('homeowner.index', compact('homeowners'));
    }

    public function create()
    {
        return view('homeowner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        Homeowner::create($request->all());

        return redirect()->route('homeowner.index')
                         ->with('success', 'Homeowner created successfully.');
    }


    public function edit($id)
    {
        $homeowner = Homeowner::find($id);
        return view('homeowner.edit', compact('homeowner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $homeowner = Homeowner::find($id);
        $homeowner->update($request->all());

        return redirect()->route('homeowner.index');

    }

    public function destroy($id)
    {
        $homeowner = Homeowner::find($id);
        $homeowner->delete();

        return redirect()->route('homeowner.index');

    }
}

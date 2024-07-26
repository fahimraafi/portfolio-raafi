<?php

namespace App\Http\Controllers;

use App\Models\Counterup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounterupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dashboard.counterup.index',[
            'counterups'=> Counterup::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.dashboard.counterup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $counterup = Counterup::create($request->except('_token')+[
            'created_by' => Auth::user()->name,
        ]);
        session()->flash('success','Added Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Counterup $counterup)
    {
        return view('layouts.dashboard.counterup.edit', compact('counterup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Counterup $counterup)
    {
        Counterup::find($counterup->id)->update([
            'name' =>$request->name,
            'experience' =>$request->experience,
            'number_of_projects' => $request->number_of_projects,
            'number_of_clients' => $request->number_of_clients,
            'retention_rate' =>$request->retention_rate,
            'created_by' => Auth::user()->name,
            'status' => $request->status,

        ]);
        session()->flash('updated', 'Informations updated');
        return redirect('/counterup');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Counterup $counterup)
    {
        Counterup::find($counterup->id)->delete();
        return back();
    }
}

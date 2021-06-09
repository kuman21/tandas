<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('savings.index')->with('savings', \Auth::user()->savings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('savings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Saving::create([
            'user_id' => \Auth::user()->id,
            'numbers' => $request->numbers,
            'periodicity' => $request->periodicity,
            'amount' => $request->amount,
            'shared' => $request->shared,
            'start' => $request->start,
        ]);

        return back()->with('success', 'La tanda se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function show(Saving $saving)
    {
        return view('savings.show', compact('saving'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function edit(Saving $saving)
    {
        return view('savings.edit', compact('saving'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saving $saving)
    {
        $saving::update([
            'numbers' => $request->numbers,
            'periodicity' => $request->periodicity,
            'amount' => $request->amount,
            'shared' => $request->shared,
            'start' => $request->start,
        ]);

        return back()->with('success', 'La tanda se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saving $saving)
    {
        $saving->delete();

        return back()->with('success', 'La tanda se ha eliminado correctamente.');
    }
}

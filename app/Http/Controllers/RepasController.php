<?php

namespace App\Http\Controllers;

use App\Models\repas;
use Illuminate\Http\Request;

class RepasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.repas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $repas=repas::create([
            'user_id'=>auth()->id(),
            $timestamp = $request->input('date'),
            'date'=>date('Y-m-d H:i:s', $timestamp),
           'Calories'=>$request->Calories,
            'periode'=>$request->periode,
            'heure'=>$request->heure



            ]);

        return redirect()->back()->with('success', 'Cours and products added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(repas $repas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(repas $repas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, repas $repas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(repas $repas)
    {
        //
    }
}

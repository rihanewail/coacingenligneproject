<?php

namespace App\Http\Controllers;

use App\Models\demandePlanification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandePlanificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view('coach.createplanifucatin') ;   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'dateDebut' => 'required|date_format:Y-m-d',
            'dateFin' => 'required|date_format:Y-m-d|after:dateDebut',
            'prix' => 'required|numeric',
            'coache_id' => 'required|exists:coaches,id',
        ]);

        // Create a new DemandePlanification instance
        DemandePlanification::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
            'prix' => $request->prix,
            'coache_id' => Auth::id(),
        ]);

        // $demandeSuivi = new demandePlanification();


        // $demandeSuivi->nom = $request->nom;

        // $demandeSuivi->description = $request->description;
        // $demandeSuivi->dateDebut = $request->dateDebut;
        // $demandeSuivi->dateFin = $request->dateFin;

        // $demandeSuivi->prix = $request->prix;
        // $demandeSuivi->coache_id = Auth::id();

        //  $demandeSuivi->save();
        // Add authenticated user's ID as the 'coache_id'

        // Create a new DemandePlanification instance

        // Redirect back or wherever you want
        return redirect()->route('DemandePlanification.index')->with('success', 'DemandePlanification created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(demandePlanification $demandePlanification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(demandePlanification $demandePlanification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, demandePlanification $demandePlanification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(demandePlanification $demandePlanification)
    {
        //
    }
}

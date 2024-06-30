<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\demandeInscription;
use App\Models\demandeSuivi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
    /**
     * nnnnDisplay a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store($id)
    {

            // Retrieve the DemandeInscription entry
            $demande = demandeInscription::findOrFail($id);

            // Create a new Coach entry using the data from DemandeInscription
            $coach = new Coach();
            $coach->nom = $demande->nom;
            $coach->prenom = $demande->prenom;
            $coach->email=$demande->email;
            $coach->sex = $demande->sex;
            $coach->Date_N = $demande->Date_N;
            $coach->specialite = $demande->specialite;
            $coach->experience = $demande->experience;
            $coach->save();

            // Redirect back or to another page with a success message
        }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        // $coach = Coach::findOrFail($id);
        $demandeSuivi = new demandeSuivi();


        $demandeSuivi->coache_id = $id;
        $demandeSuivi->user_id = Auth::id();
         $demandeSuivi->save();
return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coach $coach)
    {
        //
    }
}

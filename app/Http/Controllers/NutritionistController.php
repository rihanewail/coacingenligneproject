<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\demandeInscription;
use App\Models\Nutritionist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NutritionistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $demand = DemandeInscription::findOrFail($id);

        // Insert into specific table based on specialite
        if ($demand->specialite == 'Nutritionist') {
            Nutritionist::create([
                'nom' => $demand->nom,
                'prenom' => $demand->prenom,
                'sex' => $demand->sex,
                'Date_N' => $demand->Date_N,
                'experience' => $demand->experience,
                'specialite' => $demand->specialite,
                'email' => $demand->email,
                'photo' => $demand->email,
            ]);
        } else {
            Coach::create([
                'nom' => $demand->nom,
                'prenom' => $demand->prenom,
                'sex' => $demand->sex,
                'Date_N' => $demand->Date_N,
                'experience' => $demand->experience,
                'specialite' => $demand->specialite,
                'email' => $demand->email,
                'photo' => $demand->email,
            ]);
        }
        // Create a new user
        User::create([
            'name' => $demand->nom . ' ' . $demand->prenom,
            'email' => $demand->email,
            'password' => Hash::make($demand->nom . ' ' . $demand->prenom), // Hash the password
        ]);

        // Delete the demand after processing
        $demand->delete();

        return back()->with('success', 'Demand admitted successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Nutritionist $nutritionist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nutritionist $nutritionist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nutritionist $nutritionist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nutritionist $nutritionist)
    {
        //
    }
}

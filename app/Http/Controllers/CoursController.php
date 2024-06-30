<?php

namespace App\Http\Controllers;

use App\Models\cour;
use App\Models\produit;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.cours.index');


    }

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


        $cours=Cour::create([
            'user_id'=>auth()->id(),
            $timestamp = $request->input('date'),
            'date'=>date('Y-m-d H:i:s', $timestamp),

            ]);

        foreach ($request->items as $item) {
            $details = explode(',', $item); // [name, type, quantity]
            $produit = new produit();
            $produit->nom = $details[0];
            $produit->detaille = $details[2];  // Assuming detaille is meant to store quantity
            $produit->type = $details[1];
            $produit->cour_id = $cours->id;
            $produit->save();
        }

        return redirect()->back()->with('success', 'Cours and products added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(cour $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cour $cours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cour $cours)
    {
        //
    }
}

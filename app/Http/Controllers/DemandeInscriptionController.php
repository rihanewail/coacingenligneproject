<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\demandeInscription;
use App\Models\Nutritionist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DemandeInscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DemandeInscriptions=DemandeInscription::all();
        return view('dashboard.consulterdemande.index',compact('DemandeInscriptions'));

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
    public function admit($id)
    {
         $demand = DemandeInscription::findOrFail($id);
$value='';
if ($demand->specialite == 'Nutritionist') {
$value='2';}
else{
    $value='3';
}
        $user=User::create([
            'name' => $demand->nom . ' ' . $demand->prenom,
            'email' => $demand->email,
              'password' => Hash::make($demand->nom ), // Hash the password
              'role'=> $value,
        ]);

        // Insert into specific table based on specialite
        if ($demand->specialite == 'Nutritionist') {
            $user-> Nutritionist()->create([
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
            $user-> Coach()->create([
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


        // Delete the demand after processing
        $demand->delete();

        return back()->with('success', 'Demand admitted successfully.');
    }


    public function  store( Request $request){



        $DemandeInscription=demandeInscription::create([
        'email'=>$request->email,
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'sex'=>$request->sex,
        'Date_N'=>$request->date_N,

        'specialite'=>$request->specialite,
        'experience'=>$request->experience,

        ]);

        return redirect()->back();

            }


    /**
     * Display the specified resource.
     */
    public function show()
    {

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
    public function update()
    {

    }
    public function storee($id,Request $request)
    {

        $registration = Nutritionist::findOrFail($id);
        // Assuming 'nutritionnistes' is a table or a relationship
        Nutritionist::create([
            'nom' => $registration->nom,
            'prenom' => $registration->prenom,
            'sex' => $registration->sex,
            'Date_N' => $registration->Date_N,
            'specialite' => $registration->specialite,
            'experience' => $registration->experience,
        ]);
        return back()->with('success', 'Registration added to Nutritionniste successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

// public function deleteRegistration() {
    $registration = demandeInscription::findOrFail($id);
    $registration->delete();
    return back()->with('success', 'Registration deleted successfully.');
}
    }














//     $user = User::create([
//         'name' => $request->Nom,
//         'email' => $request->Email,
//         'password' => bcrypt($request->Nom),

//         'usertupe' => $request->role,
//     ]);


//     // Create role-specific model instance based on the user's role
//     if ($request->role == "agent") {
//         $user->agent()->create([
//             'Nom' => $request->Nom,
//             'Prenom' => $request->Prenom,

//             'Adresse' => $request->Adresse,
//             'Age' => $request->Age,
//             'Tel' => $request->Tel,

//             'Email' => $request->Email,
//             'Occupation' => $request->Occupation,
//         ]);
//     } elseif ($request->role == "chaufeur") {
//         $user->chauffeur()->create([
//             'Nom' => $request->Nom,
//             'Prenom' => $request->Prenom,

//             'Adresse' => $request->Adresse,
//             'Age' => $request->Age,
//             'Tel' => $request->Tel,

//             'Email' => $request->Email,
//             'Permis' => $request->Permis,
//         ]);

//     }

// return redirect()->route('agent.index');

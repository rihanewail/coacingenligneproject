<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\infoetatsante;
use App\Models\User;
use App\Models\utilisateur;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => '0',
            'password' => Hash::make($data['password']),
        ]);

        $utilisateur = $user->utilisateur()->create([
            'name' => $data['name'],
            'prenom' => $data['name'],
            'email' => $data['email'],
            'sex' => $data['sex'],
            'Date_N' => $data['Date_N'],
            'taille' => $data['taille'],
        ]);
     $utilisateur->infoetatsante()->create([
            'poids' => $data['poids'],

        ]);
        $utilisateur->infomodevies()->create([
            'worktype' => $data['worktype'],
            'sleepHours' => $data['sleepHours'],
            'natureFood' => $data['natureFood'],
            'waterTaken' => $data['waterTaken'],
            'activity' => $data['activity'],
        ]);






// $user=User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'role' =>'0',

//             'password' => Hash::make($data['password']),
//         ]);

//         $user->utilisateur()->create([
//             'Nom' =>$data['name'],
//             'Prenom' => $data['Prenom'],
//              'email' => $data['email'],
//              'sex' => $data['sex'],
//              'Date_N' => $data['Date_N'],
//              'taille' => $data['taille'],
//             ]);
//             $user->infomodevies()->create([
//                 'worktype' =>$data['worktype'],
//                 'sleepHours' => $data['sleepHours'],
//                  'natureFood' => $data['natureFood'],
//                  'waterTaken' => $data['waterTaken'],
//                  'activity' => $data['activity'],
//                 ]);
   return $user;

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

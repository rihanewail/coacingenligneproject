<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Nutritionist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index()
    {
        $role=Auth::user()->role;
        if ($role=="1")

        {
return view('dashboard.layout')  ; }
        if ($role=="2") {
    return view('dashboard.layout')  ; }
         if ($role=="3") {
        return view('coach.layout')  ; }
      else {
        $nutritionists=Nutritionist::all();
        $coaches=Coach::all();
        return view('home', compact('nutritionists', 'coaches'));

             }

        }
    }

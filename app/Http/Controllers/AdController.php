<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ads=ad::all();
        return view('dashboard.add.index',compact('ads'));
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
        //
$request->validate([
'description'=>'required|max:255|string',
'image'=>'nullable|mimes:png,jpg,jpeg,webp'

]);
if($request->has('image')){
$file=$request->file('image');
$extenction=$file->getClientOriginalExtension();
$filename=time().'.'.$extenction;
$path='uploads/ad/';
$file->move($path,$filename);

}
ad:: create([
    'description'=>$request->description,
'image'=>$path.$filename,
]);
return back()->with('success', 'Registration deleted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dashboard.add.create');

    }

    /**
     * Show the form for editing the specified resource.
     */

    public function destroy($id)
    {
        $registration = ad::findOrFail($id);
        $registration->delete();
        return back()->with('success', 'Registration deleted successfully.');    }

}

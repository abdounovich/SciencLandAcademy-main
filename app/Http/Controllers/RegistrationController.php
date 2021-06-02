<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Formation;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $formations=Formation::where("type","1")->get();
        return view('welcome')->with("formations",$formations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $registration=new Registration();
       $registration->nom=$request->get('nom');

       $registration->prenom=$request->get('prenom');

       $registration->email=$request->get('email');

       $registration->age=$request->get('age');

       $registration->telephone=$request->get('phone');

       $registration->niveau=$request->get('niveau');

       $registration->formation=$request->get('formation');
       
       $registration->save();
       $msg1= " لقد أتممت تسجيلك بنجاح ".$request->get('nom')." " .$request->get('prenom'). "  شكرا لك  " ;
       $msg2="سنتصل بك قريبا";
       $message=$msg1."<p></p>".$msg2;

       return redirect()->back()->with('success', $message );   


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        $registrations=Registration::paginate(10);
        return view('registrations')->with('registrations',$registrations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}

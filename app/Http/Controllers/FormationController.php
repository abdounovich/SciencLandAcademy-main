<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations=Formation::all();
        return view('formations')->with("formations",$formations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ativation($id,$type)
    {
        $formation=Formation::find($id);
        $formation->type=$type;
        $formation->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation=new Formation();
        $formation->nom=$request->get("nom");
        $formation->type=$request->get("type");
        $formation->order=$request->get("order");

$formation->save();
return redirect()->back();
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request )
    {
        $formation=Formation::find($id);
        $formation2=Formation::where("order",$request->get("order"))->first();
        $formation2->order=$formation->order;
        $formation->nom=$request->get("nom");
        $formation->type=$request->get("type");
        $formation->order=$request->get("order");
        $formation2->save();
        $formation->save();

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}

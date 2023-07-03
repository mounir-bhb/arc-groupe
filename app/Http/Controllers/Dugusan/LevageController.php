<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Levage;
use App\Models\Dugusan\LevageTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LevageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('dugusan/levage/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $levage=new Levage();
        $levage->name=$request->name;
        $levage->max_vitesse=$request->max_vitesse;
        $levage->max_charge=$request->max_charge;
        $levage->min_charge=$request->min_charge;
        $levage->main_image=$request->file('main_image')->store('dugusan','public');
        $levage->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {
        $levage=Levage::find($id)->get();
        return $levage;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $levage=Levage::Find($id)->first();
        return Inertia::render('dugusan/levage/Edit',['levage'=>$levage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $levage=Levage::Find($id);
        $levage->name=$request->name;
        $levage->max_vitesse=$request->max_vitesse;
        $levage->max_charge=$request->max_charge;
        $levage->min_charge=$request->min_charge;
        if($request->file('main_image')){
            if($levage->main_image)
                unlink('storage/'.$levage->main_image);
            $levage->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $levage->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

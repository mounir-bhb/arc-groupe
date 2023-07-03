<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Panneau;
use App\Models\Dugusan\PanneauTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use MongoDB\Operation\Find;

class PanneauController extends Controller
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
        return Inertia::render('dugusan/panneau/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panneau= new Panneau();
        $panneau->main_image=$request->file('main_image')->store('dugusan','public');
        $panneau->save();
        foreach (config('app.locales') as $locale) {
            $panneauTranslation= new PanneauTranslation();
            $panneauTranslation->setTable('panneau_translations_'.$locale);
            $panneauTranslation->name=$request->input('name_'.$locale);
            $panneauTranslation->nombre_arrets=$request->input('nombre_arrets_'.$locale);
            $panneauTranslation->type_controle=$request->input('type_controle_'.$locale);
            $panneauTranslation->type_entrainement=$request->input('type_entrainement_'.$locale);
            $panneauTranslation->controle_groupe=$request->input('controle_groupe_'.$locale);
            $panneauTranslation->communication_serie=$request->input('communication_serie_'.$locale);
            $panneauTranslation->supplementaire=$request->input('supplementaire_'.$locale);
            $panneauTranslation->locale=$locale;
            $panneau->translations()->save($panneauTranslation);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {
        $panneau=Panneau::find($id)->translations()->get();
        return $panneau;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $panneau=Panneau::Find($id)->first();
        return Inertia::render('dugusan/panneau/Edit',['panneau'=>$panneau]);
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
        $panneau= Panneau::Find($id);
        if($request->file('main_image')){
            if($panneau->main_image)
                unlink('storage/'.$panneau->main_image);
            $panneau->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $panneau->save();
        foreach (config('app.locales') as $locale) {
            $panneauTranslation= PanneauTranslation::Find($request->input('id_'.$locale));
            $panneauTranslation->setTable('panneau_translations_'.$locale);
            $panneauTranslation->name=$request->input('name_'.$locale);
            $panneauTranslation->nombre_arrets=$request->input('nombre_arrets_'.$locale);
            $panneauTranslation->type_controle=$request->input('type_controle_'.$locale);
            $panneauTranslation->type_entrainement=$request->input('type_entrainement_'.$locale);
            $panneauTranslation->controle_groupe=$request->input('controle_groupe_'.$locale);
            $panneauTranslation->communication_serie=$request->input('communication_serie_'.$locale);
            $panneauTranslation->supplementaire=$request->input('supplementaire_'.$locale);
            $panneauTranslation->locale=$locale;
            $panneau->translations()->save($panneauTranslation);
        }
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

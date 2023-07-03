<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Regulateur;
use App\Models\Dugusan\RegulateurTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegulateurController extends Controller
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
        return Inertia::render('dugusan/regulateur/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regulateur= new Regulateur();
        $regulateur->name=$request->name;
        $regulateur->diametre1=$request->diametre1;
        $regulateur->diametre2=$request->diametre2;
        $regulateur->diametre3=$request->diametre3;
        $regulateur->diametre4=$request->diametre4;
        $regulateur->diametre5=$request->diametre5;
        $regulateur->diametre1_url=$request->file('diametre1_url')->store('dugusan','public');
        $regulateur->diametre2_url=$request->file('diametre2_url')->store('dugusan','public');
        $regulateur->diametre3_url=$request->file('diametre3_url')->store('dugusan','public');
        $regulateur->diametre4_url=$request->file('diametre4_url')->store('dugusan','public');
        $regulateur->diametre5_url=$request->file('diametre5_url')->store('dugusan','public');
        $regulateur->save();
        foreach (config('app.locales') as $locale) {
            $regulateurTranslation= new RegulateurTranslation();
            $regulateurTranslation->setTable('regulateur_translations_'.$locale);
            $regulateurTranslation->description=$request->input('description_'.$locale);
            $regulateurTranslation->locale=$locale;
            $regulateur->translations()->save($regulateurTranslation);
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
        $regulateur=Regulateur::find($id)->translations()->get();
        return $regulateur;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regulateur=Regulateur::Find($id)->first();
        return Inertia::render('dugusan/regulateur/Edit',['regulateur'=>$regulateur]);
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
        $regulateur= Regulateur::Find($id);
        $regulateur->name=$request->name;
        $regulateur->diametre1=$request->diametre1;
        $regulateur->diametre2=$request->diametre2;
        $regulateur->diametre3=$request->diametre3;
        $regulateur->diametre4=$request->diametre4;
        $regulateur->diametre5=$request->diametre5;
        if($request->file('diametre1_url')){
            if($regulateur->diametre1_url)
                unlink('storage/'.$regulateur->diametre1_url);
                    $regulateur->diametre1_url=$request->file('diametre1_url')->store('dugusan','public');
        }
        if($request->file('diametre1_url')){
            if($regulateur->diametre2_url)
                unlink('storage/'.$regulateur->diametre2_url);
                    $regulateur->diametre2_url=$request->file('diametre2_url')->store('dugusan','public');
        }
        if($request->file('diametre3_url')){
            if($regulateur->diametre3_url)
                unlink('storage/'.$regulateur->diametre3_url);
                    $regulateur->diametre3_url=$request->file('diametre3_url')->store('dugusan','public');
        }
        if($request->file('diametre4_url')){
            if($regulateur->diametre4_url)
                unlink('storage/'.$regulateur->diametre4_url);
                    $regulateur->diametre4_url=$request->file('diametre4_url')->store('dugusan','public');
        }
        if($request->file('diametre5_url')){
            if($regulateur->diametre5_url)
                unlink('storage/'.$regulateur->diametre5_url);
                    $regulateur->diametre5_url=$request->file('diametre5_url')->store('dugusan','public');
        }
        /* $regulateur->diametre2_url=$request->file('diametre2_url')->store('dugusan','public');
        $regulateur->diametre3_url=$request->file('diametre3_url')->store('dugusan','public');
        $regulateur->diametre4_url=$request->file('diametre4_url')->store('dugusan','public');
        $regulateur->diametre5_url=$request->file('diametre5_url')->store('dugusan','public'); */
        $regulateur->save();
        foreach (config('app.locales') as $locale) {
            $regulateurTranslation= RegulateurTranslation::Find($request->input('id_'.$locale));
            $regulateurTranslation->setTable('regulateur_translations_'.$locale);
            $regulateurTranslation->description=$request->input('description_'.$locale);
            $regulateurTranslation->locale=$locale;
            $regulateur->translations()->save($regulateurTranslation);
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

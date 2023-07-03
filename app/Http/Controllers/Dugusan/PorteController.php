<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Image;
/* use App\Models\Dugusan\Image; */
use App\Models\Dugusan\Porte;
use App\Models\Dugusan\PorteTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PorteController extends Controller
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
        return Inertia::render('dugusan/porte/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $porte= new Porte();
        $porte->main_image=$request->file('main_image')->store('dugusan','public');
        $porte->save();
        if($request->file('imgs')){
            foreach($request->file('imgs') as $image){
                $img= new Image();
                $img->image_url=$image->store('dugusan','public');
                $porte->images()->save($img);
            }
        }
        
        foreach (config('app.locales') as $locale) {
            $porteTranslation= new PorteTranslation();
            $porteTranslation->name= $request->input('name_'.$locale);
            $porteTranslation->description= $request->input('description_'.$locale);
            $porteTranslation->locale=$locale;
            $porte->translations()->save($porteTranslation);
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
        $porte=Porte::Find($id)->translations()->get();
        return $porte;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porte=Porte::Find($id)->with('images')->first();
        return Inertia::render('dugusan/porte/Edit',['porte'=>$porte]);
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
        $porte= Porte::find($id);
        if($request->file('main_image'))
            if($porte->main_image)
            unlink('storage/'.$porte->main_image);
        $porte->main_image=$request->file('main_image')->store('dugusan','public');
        $porte->save();
        if($request->file('imgs')){
            foreach($request->file('imgs') as $image){
                $img= new Image();
                $img->image_url=$image->store('dugusan','public');
                $porte->images()->save($img);
            }
        }

        if($request->imgs_removed){
            foreach($request->imgs_removed as $image){
                $img= Image::find($image);
                unlink('storage/'.$img->image_url);
            }
        }
        
        foreach (config('app.locales') as $locale) {
            $porteTranslation= PorteTranslation::Find($request->input('id_'.$locale));
            $porteTranslation->name= $request->input('name_'.$locale);
            $porteTranslation->description= $request->input('description_'.$locale);
            $porteTranslation->locale=$locale;
            $porte->translations()->save($porteTranslation);
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

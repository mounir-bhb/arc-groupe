<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Presentation;
use App\Models\Dugusan\PresentationTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PresentationController extends Controller
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
        return Inertia::render('dugusan/presentation/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presentation=new Presentation();
        /* $presentation=$request->name; */
        $presentation->main_image=$request->file('main_image')->store('dugusan','public');
        $presentation->save();
        foreach (config('app.locales') as $locale) {
            foreach($request->input('paragraphes_'.$locale) as $paragraphe){
                $presentationTranslation=new PresentationTranslation();
                $presentationTranslation->setTable('presentation_translations_'.$locale);
                
                $presentationTranslation->description= $paragraphe['paragraph'];
                $presentationTranslation->locale=$locale;
                $presentation->translations()->save($presentationTranslation);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $id)
    {
        $presentation=Presentation::find($id)->translations()->select('id','description')->get();
        return $presentation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentation=Presentation::Find($id)->first();
        return Inertia::render('dugusan/presentation/Edit',['presentation'=>$presentation]);
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
         $presentation= Presentation::Find($id);
        /*if($request->file('main_image')){
            if($presentation->main_image)
                unlink('storage/'.$presentation->main_image);
            $presentation->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $presentation->save(); */
        /* $presentationTranslations=$presentation->translations(); */
        /* dd($presentationTranslations); */
        foreach (config('app.locales') as $locale) {

            foreach($request->input('paragraphes_'.$locale) as $paragraphe){
                if($paragraphe['id'])
                    $presentationTranslation=PresentationTranslation::Find($paragraphe['id']);
                else
                    $presentationTranslation=new PresentationTranslation();
                $presentationTranslation->setTable('presentation_translations_'.$locale);
                $presentationTranslation->description= $paragraphe['description'];
                $presentationTranslation->locale=$locale;
                $presentation->translations()->save($presentationTranslation);
            }
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

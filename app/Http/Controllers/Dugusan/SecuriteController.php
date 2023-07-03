<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Securite;
use App\Models\Dugusan\SecuriteTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SecuriteController extends Controller
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
        return Inertia::render('dugusan/securite/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $securite= new Securite();
        $securite->name=$request->name;
        $securite->main_image=$request->file('main_image')->store('dugusan','public');
        $securite->pq=$request->pq;
        $securite->vnominale=$request->vnominale;
        $securite->save();
        foreach (config('app.locales') as $locale) {
            $securiteTranslation=new SecuriteTranslation();
            $securiteTranslation->setTable('securite_translations_'.$locale);
            $securiteTranslation->type_rails=$request->input('type_rails_'.$locale);
            $securiteTranslation->normes_directive=$request->input('normes_directive_'.$locale);
            $securiteTranslation->locale=$locale;
            $securite->translations()->save($securiteTranslation);
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
        $securite=Securite::find($id)->translations()->get();
        return $securite;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $securite=Securite::Find($id)->first();
        return Inertia::render('dugusan/securite/Edit',['securite'=>$securite]);
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
        $securite= Securite::Find($id);
        $securite->name=$request->name;
        if($request->file('main_image')){
            if($securite->main_image)
                unlink('storage/'.$securite->main_image);
            $securite->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $securite->pq=$request->pq;
        $securite->vnominale=$request->vnominale;
        $securite->save();
        foreach (config('app.locales') as $locale) {
            $securiteTranslation=SecuriteTranslation::Find($request->input('id_'.$locale));
            $securiteTranslation->setTable('securite_translations_'.$locale);
            $securiteTranslation->type_rails=$request->input('type_rails_'.$locale);
            $securiteTranslation->normes_directive=$request->input('normes_directive_'.$locale);
            $securiteTranslation->locale=$locale;
            $securite->translations()->save($securiteTranslation);
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

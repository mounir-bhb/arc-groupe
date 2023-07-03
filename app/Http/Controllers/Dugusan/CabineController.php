<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* use App\Models\Dugusan\Cabine;
use App\Models\DugusanTranslat\CabineTranslation; */
use App\Models\Dugusan\Cabine;
use App\Models\Dugusan\CabineTranslation;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use MongoDB\Operation\Find;

class CabineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*  $cabine=Cabine::localized()->get();
        dd($cabine);  */
        /* $locale = app()->getLocale();*/
        /* $locale= session('locale', config('app.locale'));
        $cabines = Cabine::with(['translations' => function ($query) use ($locale) {
            $query->where('locale', $locale);
        }])->get(); */
        /* $cabines=Cabine::all(); */
        $cabines= Cabine::with('translation')->get();
        dd($cabines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('dugusan/cabine/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request); */
        $cabines=[];
        $cabine = new Cabine();
        $cabine->name = $request->name;
        if($request->file('main_image')){
            $cabine->main_image=$request->file('main_image')->store('dugusan','public');
        }
        if($request->file('plafond_image')){
            $cabine->plafond_image=$request->file('plafond_image')->store('dugusan','public');
        }
        if($request->file('sol_image')){
            $cabine->sol_image=$request->file('sol_image')->store('dugusan','public');
        }
        if($request->file('paroi_image')){
            $cabine->paroi_image=$request->file('paroi_image')->store('dugusan','public');
        }
        
        $cabine->save();
        foreach (config('app.locales') as $locale){
            $cabineTranslation = new CabineTranslation();
            $cabineTranslation->setTable('cabine_translations_' . $locale);
            $cabineTranslation->back_wall = $request->input('back_wall_' . $locale);
            $cabineTranslation->ceiling = $request->input('ceiling_' . $locale);
            $cabineTranslation->floor = $request->input('floor_' . $locale);
            $cabineTranslation->accessories = $request->input('accessories_' . $locale);
            $cabineTranslation->handrail = $request->input('handrail_' . $locale);
            $cabineTranslation->side_walls = $request->input('side_walls_' . $locale);
            $cabineTranslation->locale = $locale;
            $cabineTranslation->setTable('cabine_translations_' . $locale);
            /* dd($cabine->id); */
            $cabine->translations()->save($cabineTranslation);
            /* $cabineTranslation->save(); */
            array_push($cabines,$cabineTranslation);
        }
        $cabine->save();
        dd($cabines);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {
        $cabine=Cabine::find($id)->translations()->get();
        return $cabine;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabine=Cabine::Find($id)->first();
        return Inertia::render('dugusan/cabine/Edit',['cabine'=>$cabine]);
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
        $cabines=[];
        $cabine = Cabine::find($id);
        if($request->file('main_image')){
            if($cabine->main_image)
                unlink('storage/'.$cabine->main_image);
            $cabine->main_image=$request->file('main_image')->store('dugusan','public');
        }
        if($request->file('plafond_image')){
            if($cabine->plafond_image)
                unlink('storage/'.$cabine->plafond_image);
            $cabine->plafond_image=$request->file('plafond_image')->store('dugusan','public');
        }
        if($request->file('sol_image')){
            if($cabine->sol_image)
            unlink('storage/'.$cabine->sol_image);
            $cabine->sol_image=$request->file('sol_image')->store('dugusan','public');
        }
        if($request->file('paroi_image')){
            if($cabine->paroi_image)
                unlink('storage/'.$cabine->paroi_image);
            $cabine->paroi_image=$request->file('paroi_image')->store('dugusan','public');
        }
        $cabine->save();
        foreach (config('app.locales') as $locale) {
        
            $cabineTranslation =  CabineTranslation::Find($request->input('id_'.$locale));
            $cabineTranslation->setTable('cabine_translations_' . $locale);
            $cabineTranslation->back_wall = $request->input('back_wall_' . $locale);
            $cabineTranslation->ceiling = $request->input('ceiling_' . $locale);
            $cabineTranslation->floor = $request->input('floor_' . $locale);
            $cabineTranslation->accessories = $request->input('accessories_' . $locale);
            $cabineTranslation->handrail = $request->input('handrail_' . $locale);
            $cabineTranslation->side_walls = $request->input('side_walls_' . $locale);
            $cabineTranslation->locale = $locale;
            $cabineTranslation->save();
            array_push($cabines,$cabineTranslation);
        }
        $cabine->save();
        dd($cabines);
    
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

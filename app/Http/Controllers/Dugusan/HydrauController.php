<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Hydrau;
use App\Models\Dugusan\HydrauTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HydrauController extends Controller
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
        return Inertia::render('dugusan/hydrau/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hydrau=new Hydrau();
        $hydrau->name=$request->name;
        $hydrau->main_image=$request->file('main_image')->store('dugusan','public');
        $hydrau->pq=$request->pq;
        $hydrau->vnominale=$request->vnominale;
        $hydrau->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {
        $hydrau=Hydrau::find($id)->get();
        return $hydrau;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hydrau=Hydrau::Find($id)->first();
        return Inertia::render('dugusan/hydrau/Edit',['hydrau'=>$hydrau]);
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
        $hydrau=Hydrau::Find($id);
        $hydrau->name=$request->name;
        if($request->file('main_image')){
            if($hydrau->main_image)
                unlink('storage/'.$hydrau->main_image);
            $hydrau->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $hydrau->pq=$request->pq;
        $hydrau->vnominale=$request->vnominale;
        $hydrau->save();
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

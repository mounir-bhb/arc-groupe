<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Frein;
use App\Models\Dugusan\FreinTranslation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use MongoDB\Operation\Find;

class FreinController extends Controller
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
        return Inertia::render('dugusan/frein/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $frein=new Frein();
        $frein->name=$request->name;
        $frein->main_image=$request->file('main_image')->store('dugusan','public');
        $frein->pq=$request->pq;
        $frein->vnominale=$request->vnominale;
        $frein->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang,$id)
    {
        $frein=Frein::find($id)->get();
        return $frein;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frein=Frein::Find($id)->first();
        return Inertia::render('dugusan/frein/Edit',['frein'=>$frein]);
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
        $frein=Frein::Find($id);
        $frein->name=$request->name;
        if($request->file('main_image')){
            if($frein->main_image)
                unlink('storage/'.$frein->main_image);
            $frein->main_image=$request->file('main_image')->store('dugusan','public');
        }
        $frein->pq=$request->pq;
        $frein->vnominale=$request->vnominale;
        $frein->save();
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

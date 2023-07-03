<?php

namespace App\Http\Controllers\Dugusan;

use App\Http\Controllers\Controller;
use App\Models\Dugusan\Cabine;
use App\Models\Dugusan\Frein;
use App\Models\Dugusan\Hydrau;
use App\Models\Dugusan\Levage;
use App\Models\Dugusan\Panneau;
use App\Models\Dugusan\Porte;
use App\Models\Dugusan\Presentation;
use App\Models\Dugusan\Regulateur;
use App\Models\Dugusan\Securite;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DugusanController extends Controller
{
    public function index(){
        $cabines= Cabine::with('translations')->get();
        $frein= Frein::all();
        $hydraux=Hydrau::all();
        $levages=Levage::all();
        $panneaux=Panneau::with('translations')->get();
        $portes=Porte::with('translations','images')->get();
        $presentation=Presentation::with('translations')->get();
        $regulateur=Regulateur::with('translations')->get();
        $securite=Securite::with('translations')->get();
        /* dd($cabines); */
        return Inertia::render('Dugusan',[
            'cabines'=>$cabines,
            'frein'=>$frein,
            'hydraux'=>$hydraux,
            'levages'=>$levages,
            'panneaux'=>$panneaux,
            'portes'=>$portes,
            'presentation'=>$presentation,
            'regulateur'=>$regulateur,
            'securite'=>$securite
        ]);
    }
}

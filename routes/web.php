<?php

use App\Http\Controllers\Dugusan\CabineController;
use App\Http\Controllers\Dugusan\DugusanController;
use App\Http\Controllers\Dugusan\FreinController;
use App\Http\Controllers\Dugusan\HydrauController;
use App\Http\Controllers\Dugusan\LevageController;
use App\Http\Controllers\Dugusan\PanneauController;
use App\Http\Controllers\Dugusan\PorteController;
use App\Http\Controllers\Dugusan\PresentationController;
use App\Http\Controllers\Dugusan\RegulateurController;
use App\Http\Controllers\Dugusan\SecuriteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use MongoDB\Client;


//use Closure;
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return redirect()->route('home');
});

/* Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /* Route::resources([
        'cabine'=>CabineController::class,
        'frein'=>FreinController::class,
    ]); */
    Route::resources([
        'cabine'=>CabineController::class,
        'frein'=>FreinController::class,
        'hydrau'=>HydrauController::class,
        'levage'=>LevageController::class,
        'panneau'=>PanneauController::class,
        'porte'=>PorteController::class,
        'presentation'=>PresentationController::class,
        'regulateur'=>RegulateurController::class,
        'securite'=>SecuriteController::class
    ],
    ['only'=>['create','store','edit','update']]);
    /* Route::get('cabine/create',[CabineController::class,'create']);
    Route::get('frein/create',[FreinController::class,'create']);
    Route::get('hydrau/create',[HydrauController::class,'create']);
    Route::get('levage/create',[LevageController::class,'create']);
    Route::get('panneau/create',[PanneauController::class,'create']);
    Route::get('porte/create',[PorteController::class,'create']);
    Route::get('presentation/create',[PresentationController::class,'create']);
    Route::get('regulateur/create',[RegulateurController::class,'create']);
    Route::get('securite/create',[SecuriteController::class,'create']); */
});
Route::middleware(['locale'])->group(function () {
    Route::prefix('{lang?}')->where(['lang'=>'en|fr|tr|'])->group(function () {
        /* Route::get('cabine/index',[CabineController::class,'index']);
        Route::get('frein/index',[FreinController::class,'index']);
        Route::get('hydrau/index',[HydrauController::class,'index']);
        Route::get('levage/index',[LevageController::class,'index']);
        Route::get('panneau/index',[PanneauController::class,'index']);
        Route::get('porte/index',[PorteController::class,'index']);
        Route::get('presentation/index',[PresentationController::class,'index']);
        Route::get('regulateur/index',[RegulateurController::class,'index']);
        Route::get('securite/index',[SecuriteController::class,'index']); */
        Route::get('/home', function () {
            return Inertia::render('Home');
        })->name('home');
        Route::get('/dugusan',[DugusanController::class,'index']);
        /* Route::get('/dugusan', function () {
            $translate=__('Cabine');
            
            return Inertia::render('Dugusan',['translate'=>$translate]);
        }); */
        Route::get('/trafo', function () {
            return Inertia::render('Trafo');
        });
        /* Route::get('cabine/index',[CabineController::class,'index'])->name('cabine.index'); */
        Route::middleware('auth')->group(function(){
            Route::get('cabine/{cabine}',[CabineController::class,'show'])->name('cabine.show');
            Route::get('frein/{frein}',[FreinController::class,'show'])->name('frein.show');
            Route::get('hydrau/{hydrau}',[HydrauController::class,'show'])->name('hydrau.show');
            Route::get('levage/{levage}',[LevageController::class,'show'])->name('levage.show');
            Route::get('panneau/{panneau}',[PanneauController::class,'show'])->name('panneau.show');
            Route::get('porte/{porte}',[PorteController::class,'show'])->name('porte.show');
            Route::get('presentation/{presentation}',[PresentationController::class,'show'])->name('presentation.show');
            Route::get('regulateur/{regulateur}',[RegulateurController::class,'show'])->name('regulateur.show');
            Route::get('securite/{securite}',[SecuriteController::class,'show'])->name('securite.show');
        });
    });
    Route::get('/home', function () {
        return Inertia::render('Home');
    });
    Route::get('/dugusan',[DugusanController::class,'index']);
    /* Route::get('/dugusan', function () {
        $translate=__('Cabine');
        

        return Inertia::render('Dugusan',['translate'=>$translate]);
    }); */
    Route::get('/trafo', function () {
        return Inertia::render('Trafo');
    });
    
});

Route::get('/api/locales', function () {
    
    return response()->json([
        'locales' => config('app.locales'),
        'locale'=>session('locale', config('app.locale'))
    ]);
});


/* Route::fallback(function () {
    return redirect()->route('home');
}); */



require __DIR__.'/auth.php';

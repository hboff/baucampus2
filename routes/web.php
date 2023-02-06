<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\OrteatController;
use Illuminate\Support\Facades\DB;


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

//Route::get('/orteat', function() {
//    $orteats = DB::table('orteat')
//        ->get();
//    return view('orteat', compact('orteats'));
//});


Route::domain('baucampus.at')->group(function () {
    Route::get('/', function () {
        $data = DB::table('orteat')->whereBetween('laengengrad', [1.0, 12.0])->whereBetween('breitengrad', [10.0, 52.0])->get();
        return view('bauschaden', ['data' => $data]);
    });
});

Route::domain('baucampus.be')->group(function () {
    Route::get('/', function () {
        $data = DB::table('orteat')->whereBetween('laengengrad', [1.0, 12.0])->whereBetween('breitengrad', [10.0, 52.0])->get();
        return view('bauschaden', ['data' => $data]);
    });
});

Route::domain('baucampus.nl')->group(function () {
    Route::get('/', function () {
        $data = DB::table('orteat')->whereBetween('laengengrad', [1.0, 12.0])->whereBetween('breitengrad', [10.0, 52.0])->get();
        return view('hauskaufberatung', ['data' => $data]);
    });
});






//Route::get('/orteat', function() {  
//    $orteats = DB::table('orteat')
//        ->whereBetween('laengengrad', [1.0, 12.0])
//        ->whereBetween('breitengrad', [10.0, 52.0])
//                ->get();
//    
//    return view('orteat', compact('orteats'));
//});
//
//$routes = [
//    '/schimmelpilz',
//    '/hauskaufberatung',
//    '/baubegleitung',
//    '/bauschaden',
//    '/energieberatung',
//    '/immobilienbewertung',
//];
//
//$domains = [
//    'immobilienbewertung-bielefeld.com',
//    'immobilienbewertung-wuppertal.eu',
//    'baucampus.at',
//    'baucampus.be',
//    'baucampus.nl',
//];
//
//foreach ($domains as $domain) {
//    Route::domain($domain)->group(function () use ($routes) {
//        foreach ($routes as $route) {
//            $controllerMethod = str_replace('/', '', $route);
//            Route::get($route, [OrteatController::class, $controllerMethod]);
//        }
//    });
//}
//
//
//
//
//
//
//
//
//
//
//
//
//
//














//
//$routes = [
//    '/',
//    '/schimmelpilz',
//    '/hauskaufberatung',
//    '/baubegleitung',
//    '/bauschaden',
//    '/energieberatung',
//    '/immobilienbewertung',
//];
//
//$domains = [
//    'immobilienbewertung-bielefeld.com' => [
//        'laengengrad' => [51.0, 52.0],
//        'breitengrad' => [7.0, 8.0],
//    ],
//    'immobilienbewertung-wuppertal.eu' => [
//        'laengengrad' => [51.0, 52.0],
//        'breitengrad' => [7.0, 8.0],
//    ],
//    'baucampus.at' => [
//        'laengengrad' => [48.0, 49.0],
//        'breitengrad' => [12.0, 13.0],
//    ],
//    'baucampus.be' => [
//        'laengengrad' => [50.0, 51.0],
//        'breitengrad' => [3.0, 4.0],
//    ],
//    'baucampus.nl' => [
//        'laengengrad' => [52.0, 53.0],
//        'breitengrad' => [4.0, 5.0],
//    ],
//];
//
//foreach ($domains as $domain) {
//    Route::domain($domain)->group(function () use ($routes) {
//        foreach ($routes as $route) {
//            $controllerMethod = str_replace('/', '', $route);
//            Route::get($route, [OrteatController::class, $controllerMethod]);
//        }
//    });
//}
















//Route::group(['domain' => 'baucampus.at'], function () {
//Route::get('/startseite', [OrteatController::class, 'startseite']);
//Route::get('/gutachter', [GutachterController::class, 'index']);
//Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){});
//Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
//Route::get('/schimmelpilz', [OrteatController::class, 'schimmelpilz']);
//Route::get('/hauskaufberatung', [OrteatController::class, 'hauskaufberatung']);
//Route::get('/baubegleitung', [OrteatController::class, 'baubegleitung']);
//Route::get('/bauschaden', [OrteatController::class, 'bauschaden']);
//Route::get('/energieberatung', [OrteatController::class, 'energieberatung']);
//Route::get('/immobilienbewertung', [OrteatController::class, 'immobilienbewertung']);
//Route::get('/', [OrteatController::class, 'index']);
//Route::get('/team', [OrteatController::class, 'team']);
//Route::get('/gutachter', [OrteatController::class, 'gutachter']);
//});


//   Route::get('/gutachter', [GutachterController::class, 'index']);
//Route::get('/kontakt', function(){
//    return view('unterseiten/kontakt');
//});
//Route::get('/kosten-preise', function() {
//    return view('unterseiten/kosten-preise');
//});
//Route::get('/research', function() {
//    return view('unterseiten/research');
//});
//Route::get('/show', function(){
//    return view('orte/show');
//});
//Route::get('/impressum', function() {
//    return view('unterseiten/impressum');
//});
//Route::get('/orte/index', function(){
//    return view('orte/index');
//});
//
Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

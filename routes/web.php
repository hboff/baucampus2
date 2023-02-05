<?php

use App\Models\Orteat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
use App\Http\Controllers\OrteatController;
use App\Http\Controllers\GutachterController;
use App\Http\Controllers\ContactController;
use App\Models\Ort;
use App\Models\Gutachter;

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


Route::get('/show-orte', function () {
    $orte = Orteat::whereBetween('laengengrad', [51.0, 52.0])->whereBetween('breitengrad', [7.0, 8.0])->get();
    return view('show-orte', ['orte' => $orte]);
});










































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

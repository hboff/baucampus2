<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
use App\Http\Controllers\OrteatController;
use App\Http\Controllers\GutachterController;
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
//Route::group(['domain' => 'baucampus.ch'], function () {
//Route::get('/startseite', [OrteController::class, 'index'], function (){
//
//    Route::get('/gutachter', [GutachterController::class, 'index']);
//
//Route::get('/{ort}/bausachverstaendiger', [OrteController::class, 'show'], function (Request $request){
//});
//Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){
//});
//});

//Österreich//

//Route::group(['domain' => 'baucampus.at'], function () {
Route::get('/startseite', [OrteController::class, 'index'], function (){
 });
Route::get('/gutachter', [GutachterController::class, 'index']);

Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){
});
Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){
});
    
//});

 
Route::get ('/', function () {
    return view('index');
});
Route::get('/baubegleitung', function() {
    return view('unterseiten/baubegleitung');
});
Route::get('/bauschaden', function() {
    return view('unterseiten/bauschaden');
});
Route::get('/energieberatung', function() {
    return view('unterseiten/energieberatung');
});
Route::get('/hauskaufberatung', function() {
    return view('unterseiten/hauskaufberatung');
});
Route::get('/immobilienbewertung', function() {
    return view('unterseiten/immobilienbewertung');
});
Route::get('/schimmelpilz', function() {
    return view('unterseiten/schimmelpilz');
});
Route::get('/team', function() {
    return view('unterseiten/team');
});
Route::get('/show', function(){
    return view('orte/show');
});
Route::get('/gutachter', function(){
    return view('unterseiten/gutachter');
});

Route::get('/impressum', function() {
    return view('unterseiten/impressum');
});


Route::get('/orte/index', function(){
    return view('orte/index');
});



//Österreich//

//Route::group(['domain' => 'baucampus.at'], function () {
//    Route::get('/', function () {
//        return view('startseiteat');
//    });
//});



//gutgekauft/////////////////////////////////////////////


//Route::group(['domain' => 'gutgekauft.com'], function () {
//    Route::get('/', function () {
//       return view('index');
//
//    });
//});

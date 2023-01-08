<?php

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

Route::group(['domain' => 'baucampus.ch'], function () {
    Route::get('/startseite', [OrteController::class, 'startseite'], function (){
    });
   Route::get('/gutachter', [GutachterController::class, 'index']);
   
   Route::get('/{ort}/bausachverstaendiger', [OrteController::class, 'show'], function (Request $request){
   });
   Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){
   });
   Route::get('/schimmelpilz', [OrteController::class, 'schimmelpilz'], function () {
   });
   Route::get('/hauskaufberatung', [OrteController::class, 'hauskaufberatung'], function () {
   });
   Route::get('/baubegleitung', [OrteController::class, 'baubegleitung'], function () {
   });
   Route::get('/bauschaden', [OrteController::class, 'bauschaden'], function () {
   });
   Route::get('/energieberatung', [OrteController::class, 'energieberatung'], function () {
   });
   Route::get('/immobilienbewertung', [OrteController::class, 'immobilienbewertung'], function () {
   });
   Route::get('/', [OrteController::class, 'index'], function () {
   });
   Route::get('/team', [OrteController::class, 'team'], function () {
   });
   Route::get('/gutachter', [OrteController::class, 'gutachter'], function () {
   
   });
});

//Österreich//

Route::group(['domain' => 'baucampus.at'], function () {
Route::get('/startseite', [OrteatController::class, 'startseite'], function (){
 });
Route::get('/gutachter', [GutachterController::class, 'index']);

Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){
});
Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){
});
Route::get('/schimmelpilz', [OrteatController::class, 'schimmelpilz'], function () {
});
Route::get('/hauskaufberatung', [OrteatController::class, 'hauskaufberatung'], function () {
});
Route::get('/baubegleitung', [OrteatController::class, 'baubegleitung'], function () {
});
Route::get('/bauschaden', [OrteatController::class, 'bauschaden'], function () {
});
Route::get('/energieberatung', [OrteatController::class, 'energieberatung'], function () {
});
Route::get('/immobilienbewertung', [OrteatController::class, 'immobilienbewertung'], function () {
});
Route::get('/', [OrteatController::class, 'index'], function () {
});
Route::get('/team', [OrteatController::class, 'team'], function () {
});
Route::get('/gutachter', [OrteatController::class, 'gutachter'], function () {

});
});


Route::get('/show', function(){
    return view('orte/show');
});

Route::get('/impressum', function() {
    return view('unterseiten/impressum');
});


Route::get('/orte/index', function(){
    return view('orte/index');
});
Route::get('kontakt', [ContactController::class, 'index']);

Route::post('kontakt', [ContactController::class, 'store'])->name('contact.us.store');


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

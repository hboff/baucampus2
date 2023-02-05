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


$routes = [
    '/',
    '/schimmelpilz',
    '/hauskaufberatung',
    '/baubegleitung',
    '/bauschaden',
    '/energieberatung',
    '/immobilienbewertung',
];

$domains = [    'immobilienbewertung-bielefeld.com' => [        'laengengrad' => [51.0, 52.0],
        'breitengrad' => [7.0, 8.0],
    ],
    'immobilienbewertung-wuppertal.eu' => [        'laengengrad' => [51.0, 52.0],
        'breitengrad' => [7.0, 8.0],
    ],
    'baucampus.at' => [        'laengengrad' => [48.0, 49.0],
        'breitengrad' => [12.0, 13.0],
    ],
    'baucampus.be' => [        'laengengrad' => [50.0, 51.0],
        'breitengrad' => [3.0, 4.0],
    ],
    'baucampus.nl' => [        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [4.0, 5.0],
    ],
];

foreach ($domains as $domain => $values) {
    Route::domain($domain)->group(function () use ($values) {
        Route::get('/', 'OrteController@index')->name('index');
        Route::get('/startseite', 'OrteController@startseite')->name('startseite');
        Route::get('/schimmelpilz', 'OrteController@schimmelpilz')->name('schimmelpilz');
        Route::get('/hauskaufberatung', 'OrteController@hauskaufberatung')->name('hauskaufberatung');
        Route::get('/baubegleitung', 'OrteController@baubegleitung')->name('baubegleitung');
        Route::get('/bauschaden', 'OrteController@bauschaden')->name('bauschaden');
        Route::get('/energieberatung', 'OrteController@energieberatung')->name('energieberatung');
        Route::get('/immobilienbewertung', 'OrteController@immobilienbewertung')->name('immobilienbewertung');
        Route::get('/team', 'OrteController@team')->name('team');
        Route::get('/gutachter', 'OrteController@gutachter')->name('gutachter');
        Route::get('/orte/{ort}', 'OrteController@show')->name('orte.show');
    });
}
///////Route::group(['domain' => 'baucampus.at'], function () {
///////Route::get('/startseite', [OrteatController::class, 'startseite']);
///////Route::get('/gutachter', [GutachterController::class, 'index']);
///////Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){});
///////Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
///////Route::get('/schimmelpilz', [OrteatController::class, 'schimmelpilz']);
///////Route::get('/hauskaufberatung', [OrteatController::class, 'hauskaufberatung']);
///////Route::get('/baubegleitung', [OrteatController::class, 'baubegleitung']);
///////Route::get('/bauschaden', [OrteatController::class, 'bauschaden']);
///////Route::get('/energieberatung', [OrteatController::class, 'energieberatung']);
///////Route::get('/immobilienbewertung', [OrteatController::class, 'immobilienbewertung']);
///////Route::get('/', [OrteatController::class, 'index']);
///////Route::get('/team', [OrteatController::class, 'team']);
///////Route::get('/gutachter', [OrteatController::class, 'gutachter']);
///////});
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

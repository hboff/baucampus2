<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GutachterController;

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

$routes = [
    'schimmelpilz',
    'hauskaufberatung',
    'baubegleitung',
    'bauschaden',
    'energieberatung',
    'immobilienbewertung',
    'gutachter',
    'team',
    'kontakt',
    'kosten-preise',
    'research',
    'show',
    'impressum',
];

$domains = [
    'immobilienbewertung-bielefeld.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    'immobilienbewertung-wuppertal.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    'baucampus.at' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    'baucampus.be' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
    ],
    'baucampus.nl' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
    ],
];

foreach ($domains as $domain => $domainData) {
Route::domain($domain)->group(function () use ($routes, $domainData) {
    Route::get('/', [OrteatController::class, 'index']);
    Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
    Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){});
    Route::get('contact-us', [ContactController::class, 'index']);
    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


foreach ($routes as $route) {
Route::get($route, function () use ($route, $domainData) {
$data = DB::table('orteat')
->whereBetween('laengengrad', $domainData['laengengrad'])
->whereBetween('breitengrad', $domainData['breitengrad'])
->get();
foreach ($data as $item) {
  $expert = DB::table('gutachter')
    ->whereBetween('laengengrad', [$item->lon, $item->lon2])
    ->first();
}
return view($route, ['data' => $data, 'expert' => $expert]);
}); 
}                   
});
}
//Route::get('/kontakt', function () {
//    return view('kontakt');
//});

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

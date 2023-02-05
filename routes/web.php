<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrteatController;
use App\Http\Controllers\OrteController;
use Illuminate\Support\Facades\Route;

$routes = [
    '/',
    '/schimmelpilz',
    '/hauskaufberatung',
    '/baubegleitung',
    '/bauschaden',
    '/energieberatung',
    '/immobilienbewertung',
];

$domains = [
    'immobilienbewertung-bielefeld.com',
    'immobilienbewertung-wuppertal.eu',
    'baucampus.at',
    'baucampus.be',
    'baucampus.nl',
];

foreach ($domains as $domain) {
    Route::domain($domain)->group(function () use ($routes) {
        foreach ($routes as $route) {
            $controllerMethod = str_replace('/', '', $route);
            Route::get($route, [OrteatController::class, $controllerMethod]);
        }
    });
}
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

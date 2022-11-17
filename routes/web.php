<?php

use Illuminate\Support\Facades\Route;

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


<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteatController extends Controller
{
    // Show single lisitng
    public function show($ortat, $experts) {
        $status='at';
        return view('unterseiten.bausachverstaendiger', [
            'ortsname'=> $ortat,
            'experts' => $experts
            ]);    }         

    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    public function startseite() {
        $status='at';
        return view ('startseite', compact('status'));
    }
    public function schimmelpilz() {
        $status='at';
        return view ('unterseiten.schimmelpilz', compact('status'));
    }
    public function hauskaufberatung() {
        $status='at';
        return view ('unterseiten.hauskaufberatung', compact('status'));
    }
    public function baubegleitung() {
        $status='at';
        return view ('unterseiten.baubegleitung', compact('status'));
    }
    public function bauschaden() {
        $status='at';
        return view ('unterseiten.bauschaden', compact('status'));
    }
    public function energieberatung() {
        $status='at';
        return view ('unterseiten.energieberatung', compact('status'));
    }
    public function immobilienbewertung() {
        $status='at';
        return view ('unterseiten.immobilienbewertung', compact('status'));
    }
    public function team() {
        $status='at';
        return view ('unterseiten.team', compact('status'));
    }
    public function gutachter() {
        $status='at';
        return view ('unterseiten.gutachter', compact('status'));
    }
}
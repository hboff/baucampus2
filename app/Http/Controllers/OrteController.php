<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrteController extends Controller
{
    //Show all listings
    public function index() {
        return view('orte.index', [
            'orte' => Ort::latest()
        ]);
    }
    // Show single lisitng
    public function show($ort) {
        return view('orte.test', [
        'ortsname'=> $ort
        ]);
    }
}
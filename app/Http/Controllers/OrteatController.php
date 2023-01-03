<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteatController extends Controller
{
    // Show single lisitng
    public function show($ortat) {
        return view('unterseiten.bausachverstaendiger', [
            'ortsname'=> $ortat,
            ]);    }     
            
    public function index() {
        $status='at';
        return view ('startseite', compact('status'));
    }
}
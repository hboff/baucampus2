<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteController extends Controller
{
    // Show single lisitng
    public function show($ort) {
        return view('unterseiten.bausachverstaendiger', [
            'ortsname'=> $ort,
            ]);    }            
}
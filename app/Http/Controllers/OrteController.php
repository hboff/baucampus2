<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrteController extends Controller
{
    // Show single lisitng
    public function show() {
        $users = DB::select('select * from users where active = ?', [1]);
 
        return view('user.index', ['users' => $users]);    }            
}
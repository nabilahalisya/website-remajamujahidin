<?php

namespace App\Http\Controllers;

use App\Models\Syiar;
use App\Models\Agenda;
use App\Models\Narahubung;
use Illuminate\Http\Request;

class SyiarController extends Controller
{
    // public function showsyiar(){
    //     $syiar = Syiar::all();
    //     return view('syiarr', compact('syiar'), ["title"=>"Syiar"]);
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $syiar = Agenda::all();
        $shownara = Narahubung::all();
        return view('syiarr', compact('syiar', 'shownara'), ["title"=>"Syiar"]);
        }
}

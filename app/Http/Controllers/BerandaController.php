<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Beranda;
use App\Models\Narahubung;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $showagenda = Agenda::all();
        $shownara = Narahubung::all();
        return view('homee', compact('showagenda', 'shownara'), ["title"=>"Beranda"]);
    }
}

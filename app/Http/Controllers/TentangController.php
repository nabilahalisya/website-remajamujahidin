<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Agenda;
use App\Models\Sejarah;
use App\Models\Struktur;
use App\Models\Narahubung;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function tentang(){
        $data = Sejarah::all();
        $tentangvisi = Visi::all();
        $tentangmisi = Misi::all();
        $pengurus = Struktur::all();
        $shownara = Narahubung::all();
        return view('tentang' , compact('data', 'tentangvisi', 'tentangmisi', 'pengurus', 'shownara'),  ["title"=>"Tentang"]);
    }

    public function index(){
        $syiar = Agenda::all();
        $shownara = Narahubung::all();
        return view('syiarr', compact('syiar', 'shownara'), ["title"=>"Syiar"]);
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use App\Models\PeriodePendaftaran;
use Illuminate\Http\Request;

class KaderisasiController extends Controller
{
    public function kaderisasi_v(){
        $shownara = Narahubung::all();
        $angkatan = PeriodePendaftaran::all();
        $tglmulai = PeriodePendaftaran::all();
        $tglselesai = PeriodePendaftaran::all();
        return view('kaderisasi_v', compact('shownara', 'angkatan', 'tglmulai', 'tglselesai'), ["title" => "Kaderisasi"]);
    }
    
}

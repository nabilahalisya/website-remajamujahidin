<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Narahubung;
use Illuminate\Http\Request;
use App\Models\PeriodePendaftaran;
use Illuminate\Support\Facades\DB;
use App\Models\PendaftaranAnggotaMuda;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::simplePaginate(4);
        $shownara = Narahubung::all();
        $akt = PeriodePendaftaran::all();
        return view('anggotav', compact('anggota','shownara', 'akt'), ["title" => "Data Anggota"]);
    }

    public function dataanggota()
    {
        $anggota = Anggota::simplePaginate(4);
        return view('anggota.dataanggota', compact('anggota'));
    }

    public function tambahanggota()
    {
        $anggota = Anggota::all();
        $nama = PendaftaranAnggotaMuda::all();
        $akt = PeriodePendaftaran::all();
        return view('anggota.tambahanggota', compact('nama', 'akt', 'anggota'));
    }

    public function insertanggota(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_lengkap' => 'required',
            'asal_daerah' => 'required',
            'angkatan' => 'required',
            'status' => 'required',
        ],
        [
            'deskripsi nama_lengkap' => 'isi nama_lengkap',
            'deskripsi asal_daerah' => 'isiasal_daerah',
            'deskripsi angkatan' => 'isi angkatan',
            'deskripsi status' => 'isi status',
        ]);

        $status = '';
        if($request->status == 1){
            $status = 'Anggota Muda';
        } else if($request->status == 2){
            $status = 'Anggota Biasa';
        } 

        $data = array(
            'id_anggota_muda' => $request->nama_lengkap,
            'asal_daerah' => $request->domisili,
            'id_angkatan' =>$request->angkatan,
            'status' =>$status,
        );
        DB::table('anggotas')->insert($data);
        return redirect()->route('dataanggota')->with('success', 'Data Berhasil ditambahkan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranAnggotaMuda;

class PendaftaranMudaController extends Controller
{
    public function insertpmuda(Request $request){
        $request->validate([
            'nama_lengkap' => 'required',
            'pendidikan_terakhir' => 'required',
            'no_hp' => 'required',
            'domisili' => 'required',
        ],[
            'deskripsi nama_lengkap' => 'isi nama_lengkap',
            'deskripsi pendidikan_terakhir' => 'isi pendidikan_terakhir',
            'deskripsi no_hp' => 'isi no_hp',
            'deskripsi domisili' => 'isi domisili',
        ]);
        PendaftaranAnggotaMuda::create($request->all());
        return redirect()->route('kaderisasi')->with('success', 'Kamu Berhasil Mendaftar!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PeriodePendaftaran;
use Illuminate\Http\Request;

class PeriodePendaftaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $create = PeriodePendaftaran::simplePaginate(4);
        return view('p_pendaftaran.create', compact('create'));
    }

    public function store()
    {
        return view('p_pendaftaran.store');
    }

    public function insertperiode(Request $request){
        $request->validate([
            'angkatan' => 'required',
            'tanggal_mulai' => 'required',
            'taggal_selesai' => 'required',
        ],[
            'deskripsi angkatan' => 'isi angkatan',
            'deskripsi tanggal_mulai' => 'isi tanggal_mulai',
            'deskripsi taggal_selesai' => 'isi taggal_selesai',
        ]);
        PeriodePendaftaran::create($request->all());
        return redirect()->route('creates')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function showperiode($id){
        $ubah = PeriodePendaftaran::find($id);
        return view('p_pendaftaran.change', compact('ubah'));
    }

    public function updateperiode(Request $request, $id){
        $ubah = PeriodePendaftaran::find($id);
        $ubah->update($request->all());

        return redirect()->route('creates')->with('success', 'Data Berhasil Diubah');

    }

    public function updatedatasejarah(Request $request, $id){
        $ubah = PeriodePendaftaran::find($id);
        $ubah->update($request->all());

        return redirect()->route('creates')->with('success', 'Data Berhasil Diubah');

    }

    public function deleteperiode($id){
        $create = PeriodePendaftaran::find($id);
        $create->delete();
        return redirect()->route('creates')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deleteperiode/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/creates');
    }
}

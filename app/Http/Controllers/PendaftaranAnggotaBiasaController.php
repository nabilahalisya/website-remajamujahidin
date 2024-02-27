<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use App\Models\PendaftaranAnggotaBiasa;
use Illuminate\Http\Request;

class PendaftaranAnggotaBiasaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index(){
        $data = PendaftaranAnggotaBiasa::simplePaginate(4);
        return view('p_anggotabiasa.databiasa', compact('data'));
    }

    public function tambahdata(){
        $shownara = Narahubung::all();
        return view('p_anggotabiasa.tambahdata',compact('shownara'),["title" => "Pendaftaran Anggota BIasa"]);
    }

    public function insertdatabiasa(Request $request){
        $request->validate([
            'id_anggota_muda' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
            'no_hp_orang_tua' => 'required',
            'nama_penyakit' => 'required',
            'nama_kelompok_pembinaan' => 'required',
            'alergi' => 'required',
        ],[
            'deskripsi id_anggota_muda' => 'isi id_anggota_muda',
            'deskripsi tempat_lahir' => 'isi tempat_lahir',
            'deskripsi tgl_lahir' => 'isi tgl_lahir',
            'deskripsi kelas' => 'isi kelas',
            'deskripsi semester' => 'isi semester',
            'deskripsi no_hp_orang_tua' => 'isi no_hp_orang_tua',
            'deskripsi nama_kelompok_pembinaan' => 'isi nama_kelompok_pembinaan',
            'deskripsi alergi' => 'isi alergi',
        ]);
        PendaftaranAnggotaBiasa::create($request->all());
        return redirect()->route('tambahdata')->with('success', 'Kamu Berhasil Mendaftar!');
    }

    public function tampilkanpbiasa($id){
        $data = PendaftaranAnggotaBiasa::find($id);
        return view('p_anggotabiasa.tampildata', compact('data'));
    }

    public function updatepbiasa(Request $request, $id){
        $data = PendaftaranAnggotaBiasa::find($id);
        $data->update($request->all());

        return redirect()->route('biasa')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedatabiasa($id){
        $data = PendaftaranAnggotaBiasa::find($id);
        $data->delete();
        return redirect()->route('biasa')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatabiasa/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/biasa');
    }
}

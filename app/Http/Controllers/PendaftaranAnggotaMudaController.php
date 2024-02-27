<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use App\Models\PendaftaranAnggotaMuda;
use Illuminate\Http\Request;

class PendaftaranAnggotaMudaController extends Controller
{
    public function index(){
        $data = PendaftaranAnggotaMuda::simplePaginate(4);
        return view('p_anggotamuda.datamuda', compact('data'));
    }

    public function kaderisasi(){
        $shownara = Narahubung::all();
        return view('panggotamuda' , compact('shownara'), ["title" => "Pendaftaran Anggota Muda"]);
    }

    public function insertpmuda(Request $request){
        $request->validate([
            'email' => 'required',
            'nama_lengkap' => 'required',
            'pendidikan_terakhir' => 'required',
            'no_hp' => 'required',
            'domisili' => 'required',
        ],[
            'deskripsi email' => 'isi email',
            'deskripsi nama_lengkap' => 'isi nama_lengkap',
            'deskripsi pendidikan_terakhir' => 'isi pendidikan_terakhir',
            'deskripsi no_hp' => 'isi no_hp',
            'deskripsi domisili' => 'isi domisili',
        ]);
        PendaftaranAnggotaMuda::create($request->all());
        return redirect()->route('kaderisasi')->with('success', 'Kamu Berhasil Mendaftar!');
    }

    public function tampilkandatamuda($id){
        
        // $data = PendaftaranAnggotaMuda::find($id);
        // return view('p_anggotamuda.tampildata', compact('data'));
        if(request()->ajax())
        {
            $data = PendaftaranAnggotaMuda::find($id);
            return response()->json([
                'result' => $data
            ]);
        }
    }

    public function updatepmuda(Request $request){
        // $data = PendaftaranAnggotaMuda::find($request->id);
        // $data->update($request->all());

        // return redirect()->route('muda')->with('success', 'Data Berhasil Diubah');
        $data = array(
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'no_hp' => $request->no_hp,
            'domisili' => $request->domisili
        );
        PendaftaranAnggotaMuda::where('id', $request->id_data_edit)->update($data);
        return response()->json([
            'success' => 'data berhasil disimpan'
        ]);
    }

    public function deletedatamuda($id){
        $data = PendaftaranAnggotaMuda::find($id);
        $data->delete();
        return redirect()->route('muda')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatamuda/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/muda');
    }
}

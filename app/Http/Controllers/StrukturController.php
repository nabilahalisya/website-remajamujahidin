<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Struktur::simplePaginate(4);
        return view('struktur.datastruktur', compact('data'));
    }

    public function tambahstruktur(){
        return view('struktur.tambahdata');
    }

    public function insertdatastruktur(Request $request){
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
        ],[
            'deskripsi gambar' => 'isi gambar',
            'deskripsi nama' => 'isi nama',
            'deskripsi jabatan' => 'isi jabatan',
            'deskripsi deskripsi' => 'isi deskripsi',
        ]);

        // $struktur = new Struktur;
        // $struktur->gambar = $request->gambar;
        // $struktur->nama = $request->nama;
        // $struktur->jabatan = $request->jabatan;
        // $struktur->deskripsi = $request->deskripsi;
        // $struktur->save();
        // return $request;

        $data = Struktur::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarvisi/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('struktur')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatastruktur($id){
        $data = Struktur::find($id);
        return view('struktur.tampildata', compact('data'));
    }

    public function updatedatastruktur(Request $request, $id){
        $data = Struktur::find($id);
        $data->update($request->all());

        return redirect()->route('struktur')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedatastruktur($id){
        $data = Struktur::find($id);
        $data->delete();
        return redirect()->route('struktur')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatastruktur/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/struktur');
    }
}

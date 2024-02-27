<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Visi::simplePaginate(4);
        return view('visi.datavisi', compact('data'));
    }

    public function tambahvisi(){
        return view('visi.tambahdata');
    }

    public function insertdatavisi(Request $request){
        $request->validate([
            'deskripsi' => 'required'
        ],[
            'deskripsi required' => 'isi deskripsi visi'
        ]);
        // return $request;
        Visi::create($request->all());
        return redirect()->route('visi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatavisi($id){
        $data = Visi::find($id);
        return view('visi.tampildata', compact('data'));
    }

    public function updatedatavisi(Request $request, $id){
        $data = Visi::find($id);
        $data->update($request->all());

        return redirect()->route('visi')->with('success', 'Data Berhasil Diubah');
    }

    public function tentangvisi(){
        $tentangvisi = Visi::pluck('deskripsi');
        return view('tentang' , compact('tentangvisi'), ["title"=>"Tentang"]);
    }

    public function deletedatavisi($id){
        $data = Visi::find($id);
        $data->delete();
        return redirect()->route('visi')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatavisi/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/visi');
    }
}

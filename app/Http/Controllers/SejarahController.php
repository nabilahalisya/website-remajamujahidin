<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Visi;
use App\Models\Sejarah;
use App\Models\Struktur;
use App\Models\Narahubung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class SejarahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Sejarah::simplePaginate(4);
        return view('sejarah.datasejarah', compact('data'));
    }
    
    public function tambahsejarah(){
        return view('sejarah.tambahdata');
    }

    public function insertdatasejarah(Request $request){
        $request->validate([
            'deskripsi' => 'required'
        ],[
            'deskripsi required' => 'isi deskripsi sejarah'
        ]);
        // return $request;
        Sejarah::create($request->all());
        return redirect()->route('sejarah')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatasejarah($id){
        $data = Sejarah::find($id);
        return view('sejarah.datasejarah', compact('data'));
    }

    public function updatedatasejarah(Request $request, $id){
        $data = Sejarah::find($id);
        $data->update($request->all());
        return redirect()->route('sejarah')->with('success', 'Data Berhasil Diubah');

    }

    

    

    public function deletedatasejarah($id){
        $data = Sejarah::find($id);
        $data->delete();
        return redirect()->route('sejarah')->with('success',
        'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatasejarah/' . $id .'"
        class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/sejarah');
    }

    
}

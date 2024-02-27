<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Misi::simplePaginate(4);
        return view('misi.datamisi', compact('data'));
    }

    public function tambahmisi(){
        return view('misi.tambahdata');
    }

    public function insertdatamisi(Request $request){
        $request->validate([
            'deskripsi' => 'required'
        ],[
            'deskripsi required' => 'isi deskripsi misi'
        ]);
        // return $request;
        Misi::create($request->all());
        return redirect()->route('misi')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatamisi($id){
        $data = Misi::find($id);
        return view('misi.tampildata', compact('data'));
    }

    public function updatedatamisi(Request $request, $id){
        $data = Misi::find($id);
        $data->update($request->all());

        return redirect()->route('misi')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedatamisi($id){
        $data = Misi::find($id);
        $data->delete();
        return redirect()->route('misi')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatamisi/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/misi');
    }
}

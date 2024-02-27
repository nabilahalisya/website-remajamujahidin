<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use Illuminate\Http\Request;

class NarahubungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Narahubung::simplePaginate(4);
        return view('narahubung.datanarahubung', compact('data'));
    }

    public function tambahnarahubung(){
        return view('narahubung.tambahdata');
    }

    public function insertdatanarahubung(Request $request){
        $request->validate([
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ],[
            'email required' => 'isi email',
            'no_hp required' => 'isi no_hp',
            'alamat required' => 'isi alamat',
        ]);
        Narahubung::create($request->all());
        return redirect()->route('narahubung')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatanarahubung($id){
        $data = Narahubung::find($id);
        return view('narahubung.tampildata', compact('data'));
    }

    public function updatedatanarahubung(Request $request, $id){
        $data = Narahubung::find($id);
        $data->update($request->all());
        
        return redirect()->route('narahubung')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedatanarahubung($id){
        $data = Narahubung::find($id);
        $data->delete();
        return redirect()->route('narahubung')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedatanarahubung/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/narahubung');
    }
}

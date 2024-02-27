<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data = Agenda::simplePaginate(4);
        return view('agenda.dataagenda', compact('data'));
    }

    public function tambahagenda(){
        return view('agenda.tambahdata');
    }

    public function insertdataagenda(Request $request){
        $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'waktu_pelaksanaan' => 'required',
            'deskripsi' => 'required',
        ],[
            'deskripsi gambar' => 'isi gambar',
            'deskripsi judul' => 'isi judul',
            'deskripsi waktu_pelaksanaan' => 'isi waktu_pelaksanaan',
            'deskripsi deskripsi' => 'isi deskripsi',
        ]);
        $data = Agenda::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarvisi/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandataagenda($id){
        $data = Agenda::find($id);
        return view('agenda.tampildata', compact('data'));
    }

    public function updatedataagenda(Request $request, $id){
        $data = Agenda::find($id);
        $data->update($request->all());

        return redirect()->route('agenda')->with('success', 'Data Berhasil Diubah');
    }

    public function deletedataagenda($id){
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletedataagenda/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/agenda');
    }
}

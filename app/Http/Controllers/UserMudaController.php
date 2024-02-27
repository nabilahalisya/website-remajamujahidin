<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use App\Models\UserMuda;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\PendaftaranAnggotaMuda;

class UserMudaController extends Controller
{
    public function loginmuda()
    {
        return view('mudalogin');
    } 
    
    public function index(){
        $data = UserMuda::simplePaginate(4);
        $username = PendaftaranAnggotaMuda::all();
        return view('usermuda.datauser', compact('data', 'username'));
    }

    public function storeakun()
    {
        $username = PendaftaranAnggotaMuda::all();
        return view('usermuda.createmuda', compact('username'));
    }

    public function insertmuda(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'deskripsi username required'  => 'isi  username',
            'deskripsi password required' => 'isi  password'
        ]);

        // return $request;
        $email = $request->username;
        $anggota = PendaftaranAnggotaMuda::where('id', $email)->first();
        $data = array(
            'id_anggota_muda' => $anggota->id,
            'password' => Hash::make($request['password']),
        );
        DB::table('user_account')->insert($data);
        return redirect()->route('buatakun')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function showmuda($id){
        $users = UserAccount::find($id);
        $id_muda = PendaftaranAnggotaMuda::all();
        return view('usermuda.createmuda', compact('users', 'id_muda'));
    }

    public function deleteusermuda($id){
        $data = UserMuda::find($id);
        $data->delete();
        return redirect()->route('buatakun')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deleteusermuda/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/buatakun');
    }

    public function logindatamuda(Request $request)
    {
        $shownara = Narahubung::all();
        $pendaftaran_anggota_muda = PendaftaranAnggotaMuda::where('email', $request->email)->first();
        $data = DB::table('user_account')->where('id_anggota_muda', $pendaftaran_anggota_muda->id)->first();
        // dd($data);
        if ($data != null) {
            return view('p_anggotabiasa.tambahdata',compact('shownara'),["title" => "Pendaftaran Anggota BIasa"]);
        }
    }

    // protected function create(array $data)
    // {
    //     return UserMuda::create([
    //         'id_anggota_muda' => $data['id_anggota_muda'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
}

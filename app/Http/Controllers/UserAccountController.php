<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAccountController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    protected function create(array $data)
    {
        return UserAccount::create([
            'password' => Hash::make($data['password']),
        ]);
    }
    
    public function index(){
        $users = User::simplePaginate(4);
        return view('register.dataregister', compact('users'));
    }

    public function tampilkandatauser($id){
        $users = User::find($id);
        return view('register.tampildata', compact('users'));
    }

    public function updatedatauser(Request $request, $id){
        $users = User::find($id);
        $users->update($request->all());
        return redirect()->route('create_user')->with('success', 'Data Berhasil Diubah');

    }

    public function deleteuser($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('create_user')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deleteuser/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/create_user');
    }

    
    
    
}

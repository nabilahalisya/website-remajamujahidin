<?php

namespace App\Http\Controllers;

use App\Models\HasilScreening;
use App\Models\PendaftaranAnggotaMuda;
use App\Models\PeriodePendaftaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HasilScreeningController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $data = HasilScreening::simplePaginate(4);
        // $data = HasilScreening::all();
        $nama = PendaftaranAnggotaMuda::all();
        $akt = PeriodePendaftaran::all();
        $data = DB::table('pendaftaran_anggota_mudas')
                    ->join('hasil_screening', 'pendaftaran_anggota_mudas.id', '=', 'hasil_screening.id_anggota_muda')
                    ->select('pendaftaran_anggota_mudas.nama_lengkap', 'hasil_screening.*')
                    ->simplePaginate(4);
        // dd($data);
        return view('screening.datascreening', compact('data','nama','akt'));
    }

    public function tambahscreening() {
        $data = HasilScreening::all();
        $nama = PendaftaranAnggotaMuda::all();
        $akt = PeriodePendaftaran::all();
        return view('screening.tambahdata', compact('data','nama','akt'));
    }

    public function insertdatascreening(Request $request) {
        // dd($request->all());
        $request->validate([
            'hasil_tes_baca_quran' => 'required',
            'hasil_kuisioner' => 'required',
            'presensi' => 'required'
        ],[
            'deskripsi hasil_tes_baca_quran' => 'isi hasil_tes_baca_quran',
            'deskripsi hasil_kuisioner' => 'isi hasil_kuisioner',
            'deskripsi presensi' => 'isi presensi'
        ]);
        // HasilScreening::create($request()->all());
        $hasil_tes_baca_quran = '';
        if($request->hasil_tes_baca_quran == 1){
            $hasil_tes_baca_quran = 'Lancar dan Makhrajul Huruf Betul';
        } else if($request->hasil_tes_baca_quran == 2){
            $hasil_tes_baca_quran = 'Lancar tapi Makhrajul Huruf Belum Betul';
        } else if($request->hasil_tes_baca_quran == 3){
            $hasil_tes_baca_quran = 'Terbata-bata';
        } else if($request->hasil_tes_baca_quran == 4){
            $hasil_tes_baca_quran = 'Tidak Bisa Mengaji Sama Sekali';
        }

        $hasil_kuisioner = '';
        if ($request->hasil_kuisioner == 1){
            $hasil_kuisioner = 'Lengkap';
        } else if ($request->hasil_kuisioner == 2){
            $hasil_kuisioner = 'Tidak Lengkap';
        }

        $presensi = '';
        if ($request->presensi == 1) {
            $presensi = 'Hadir Seluruh Sesi Materi';
        } else if ($request->presensi == 2) {
            $presensi = 'Hadir Tiga Sesi Materi';
        } else if ($request->presensi == 3) {
            $presensi = 'Hadir Dua Sesi Materi';
        } else if ($request->presensi == 4) {
            $presensi = 'Hadir Satu Sesi Materi';
        } else if ($request->presensi == 5) {
            $presensi = 'Tidak Hadir Sama Sekali';
        }
        $data = array(
            'id_anggota_muda' => $request->nama_lengkap,
            'id_angkatan' => $request->angkatan,
            'hasil_tes_baca_quran' =>$hasil_tes_baca_quran,
            'hasil_kuisioner' =>$hasil_kuisioner,
            'presensi' =>$presensi,
            'status_kelulusan' =>$request->status_kelulusan,
        );
        // dd($data);
        // HasilScreening::create($data);
        // dd($data);
        DB::table('hasil_screening')->insert($data);
        return redirect()->route('screening')->with('success', 'Data Berhasil ditambahkan');
    }

    public function tampilkanscreening($id){
        $data = HasilScreening::find($id);
        $nama = PendaftaranAnggotaMuda::all();
        $akt = PeriodePendaftaran::all();

        
        return view('screening.tampildata', compact('data','nama','akt'));
    }

    public function updatescreening(Request $request, $id){
        $data = HasilScreening::find($id);
        $request->validate([
            'hasil_tes_baca_quran' => 'required',
            'hasil_kuisioner' => 'required',
            'presensi' => 'required',
            'status_kelulusan' => 'required',
        ],[
            'deskripsi hasil_tes_baca_quran' => 'isi hasil_tes_baca_quran',
            'deskripsi hasil_kuisioner' => 'isi hasil_kuisioner',
            'deskripsi presensi' => 'isi presensi',
            'deskripsi status_kelulusan' => 'isi status_kelulusan',
        ]);
        $hasil_tes_baca_quran = '';
        if($request->hasil_tes_baca_quran == 1){
            $hasil_tes_baca_quran = 'Lancar dan Makhrajul Huruf Betul';
        } else if($request->hasil_tes_baca_quran == 2){
            $hasil_tes_baca_quran = 'Lancar tapi Makhrajul Huruf Belum Betul';
        } else if($request->hasil_tes_baca_quran == 3){
            $hasil_tes_baca_quran = 'Terbata-bata';
        } else if($request->hasil_tes_baca_quran == 4){
            $hasil_tes_baca_quran = 'Tidak Bisa Mengaji Sama Sekali';
        }

        $hasil_kuisioner = '';
        if ($request->hasil_kuisioner == 1){
            $hasil_kuisioner = 'Lengkap';
        } else if ($request->hasil_kuisioner == 2){
            $hasil_kuisioner = 'Tidak Lengkap';
        }

        $presensi = '';
        if ($request->presensi == 1) {
            $presensi = 'Hadir Seluruh Sesi Materi';
        } else if ($request->presensi == 2) {
            $presensi = 'Hadir Tiga Sesi Materi';
        } else if ($request->presensi == 3) {
            $presensi = 'Hadir Dua Sesi Materi';
        } else if ($request->presensi == 4) {
            $presensi = 'Hadir Satu Sesi Materi';
        } else if ($request->presensi == 5) {
            $presensi = 'Tidak Hadir Sama Sekali';
        }
        $data = array(
            'id_anggota_muda' => $request->nama_lengkap,
            'id_angkatan' => $request->angkatan,
            'hasil_tes_baca_quran' =>$hasil_tes_baca_quran,
            'hasil_kuisioner' =>$hasil_kuisioner,
            'presensi' =>$presensi,
            'status_kelulusan' =>$request->status_kelulusan,
        );
        DB::table('hasil_screening')->update($data);
        // $data->update($request->all());

        return redirect()->route('screening')->with('success', 'Data Berhasil Diubah');
    }

    public function deletescreening($id){
        $data = HasilScreening::find($id);
        $data->delete();
        return redirect()->route('screening')->with('success', 'Data Berhasil Dihapus');

    }

    public function konfirmasi($id){
        alert()->question('Peringatan!!','Kamu yakin ingin menghapus data ini?')
        ->showConfirmButton('<a href="/deletescreening/' . $id .'" class="text-white" >Hapus</a>', '#3085d6')->toHtml()
        ->showCancelButton('Kembali', '#aaa')->reverseButtons();
        return redirect('/screening');
    }
}

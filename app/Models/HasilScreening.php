<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilScreening extends Model
{
    use HasFactory;

    protected $table = 'hasil_screening';
    protected $fillable = ['id_anggota_muda', 'id_angkatan', 'hasil_tes_baca_quran',
                            'hasil_kuisioner', 'presensi', 'status_kelulusan', 'created_at','updated_at'];
    protected $guarded = 'id';

    public function pendaftarananggotamuda()
    {
        return $this->hasOne('App\Models\PendaftaranAnggotaMuda', 'id_anggota_muda');
    }

    public function periodependaftaran()
    {
        return $this->hasOne('App\Models\PeriodePendaftaran', 'id_angkatan');
    }

    // public function muda(){
    //     return $this->belongsTo('App\Models\PendaftaranAnggotaMuda');
    // }

    // public function periodep(){
    //     return $this->belongsTo('App\Models\PeriodePendaftaran');
    // }
    // protected $guarded = [];
    // protected $dates = ['created_at'];
}

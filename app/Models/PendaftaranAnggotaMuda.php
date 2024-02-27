<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranAnggotaMuda extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function hasilscreening()
    {
        return $this->hasOne('App\Models\HasilScreening', 'id_anggota_muda');
    }

    public function user_account()
    {
        return $this->hasOne('App\Models\UserAccount', 'id_anggota_muda');
    }

    public function pendaftarananggotabiasas() {
        return $this->hasOne('App\Models\PendaftaranAnggotaBiasas', 'id_anggota_muda');
    }

    public function anggotas(){
        return $this->hasOne('App\Models\Anggota', 'id_anggota_muda');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggotas';
    protected $fillable = ['id_anggota_muda', 'asal_daerah', 'id_angkatan' ,'status', 'created_at','updated_at'];
    protected $guarded = 'id';

    public function pendaftarananggotamuda()
    {
        return $this->hasOne('App\Models\PendaftaranAnggotaMuda', 'id_anggota_muda');
    }

    public function periodependaftaran()
    {
        return $this->hasOne('App\Models\PeriodePendaftaran', 'id_angkatan');
    }
}

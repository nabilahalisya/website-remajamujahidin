<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranAnggotaBiasa extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_anggota_biasas';
    protected $fillable = ['id_anggota_muda', 'tempat_lahir', 'tgl_lahir', 'kelas',
                            'semester', 'no_hp_orang_tua', 'nama_kelompok_pembinaan','nama_penyakit','alergi', 'created_at','updated_at'];
    protected $guarded = 'id';

    public function pendaftarananggotamuda()
    {
        return $this->hasOne('App\Models\PendaftaranAnggotaMuda', 'id_anggota_muda');
    }
    // protected $dates = ['created_at'];
}

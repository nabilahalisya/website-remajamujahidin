<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodePendaftaran extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    public function hasilscreening()
    {
        return $this->hasOne('App\Models\HasilScreening', 'id_angkatan');
    }

    public function anggotas(){
        return $this->hasOne('App\Mpdels\Anggota', 'id_angkatan');
    }
}

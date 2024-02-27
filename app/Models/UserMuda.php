<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMuda extends Model
{
    use HasFactory;
    protected $table = 'user_account';
    protected $fillable = ['id_anggota_muda', 'password'];
    protected $guarded = 'id';

    public function pendaftarananggotamuda()
    {
        return $this->hasOne('App\Models\PendaftaranAnggotaMuda', 'id_anggota_muda');
    }
}

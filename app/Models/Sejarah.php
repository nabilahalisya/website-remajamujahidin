<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $fillable = [
        'deskripsi',
    ];
    protected $dates = ['created_at'];

    public function users()
    {
        return $this->hasOne('App\Models\User', 'id_users');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permintaan extends Model
{
    use HasFactory;
    protected $table = 'permintaans';
    protected $fillable = [
        'nama_barang', 'nama_user', 'jumlah_permintaan', 'foto_barang', 'deskripsi', 'status'
    ];
}

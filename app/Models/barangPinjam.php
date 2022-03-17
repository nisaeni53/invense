<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangPinjam extends Model
{
    use HasFactory;
    protected $table = 'peminjams';
    protected $fillable = [
        'nama_barang', 'nama_peminjam', 'jumlah_pinjam', 'jam_pelajaran',
    ];
}

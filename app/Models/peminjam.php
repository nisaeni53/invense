<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjams';
    protected $fillable = [
        'nama_barang', 'nama_peminjam', 'jumlah_pinjam', 'jam_pelajaran', 'status',
    ];
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'id', 'stokb');
    }
}

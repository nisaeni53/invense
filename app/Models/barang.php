<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjam;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'namab', 
        'kategorib', 
        'jenisb',
        'stokb',
        'tanggalb',
    ];
    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class);
    }
}

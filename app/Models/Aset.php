<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'kode_aset',
        'tanggal_pembelian', 
        'kategori', 
        'lokasi', 
        'harga', 
        'deskripsi',  
        'user_id', 
        'kategori_id', 
        'lokasi_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id')->withDefault([
            'nama' => 'Tanpa Kategori',
        ]);
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id')->withDefault([
            'nama_lokasi' => 'Tanpa Lokasi',
        ]);
    }
}

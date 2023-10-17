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
        'kategori', 
        'lokasi', 
        'harga', 
        'deskripsi',  
        'user_id', 
        'kategori_id', 
        'lokasi_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class)->withDefault([
            'nama' => 'Tanpa Kategori'
        ]);
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class)->withDefault([
            'nama_lokasi' => 'Tanpa Lokasi'
        ]);
    }
}

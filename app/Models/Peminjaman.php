<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode_aset',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'keterangan',
        'users_id',
        'asets_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aset()
    {
        return $this->belongsTo(Aset::class, 'asets_id');
    }
}

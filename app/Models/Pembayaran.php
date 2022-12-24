<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_petugas',
        'id_siswa',
        'tanggal_bayar',
        'id_spp',
        'jumlah_bayar'
    ];

    public function petugas()
    {
        return $this->belongsTo(Officer::class);
    }
    
    public function siswas()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function spps()
    {
        return $this->belongsTo(Spp::class);
    }
}

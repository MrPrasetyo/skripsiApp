<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomor_plat',
        'nama_pemilik',
        'alamat_pemilik',
        'merk',
        'type',
        'jenis',
        'model',
        'warna',
        'tahun',
        'isi_silinder',
        'nomor_rangka',
        'nomor_mesin',
    ];

    protected $table = 'kendaraan';
}

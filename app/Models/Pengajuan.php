<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'status',
        'tujuan',
        'berangkat_tanggal',
    ];

    protected $table = 'pengajuan';
}

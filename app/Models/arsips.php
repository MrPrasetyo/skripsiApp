<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arsips extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'created_at',
        'updated_at',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meninggal extends Model
{
    use HasFactory;
    protected $table = "meninggal";
    protected $fillable = [
        // 'id',
        'ktp_id',
        // 'tempat',
        // 'tanggal',
        // 'umur',
        // 'sebab',
        // 'makam',
        // 'nama_pelapor',
        // 'hubungan_pelapor',
    ];
    public $timestamps = true;
    public $incrementing = false;
}

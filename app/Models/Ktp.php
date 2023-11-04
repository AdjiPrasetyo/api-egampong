<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $table = "ktp";
    protected $fillable = [
        'id',
        'kk_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'status_keluarga',
        'nama_ayah',
        'nama_ibu',
    ];
    public $timestamps = true;
    public $incrementing = false;
}

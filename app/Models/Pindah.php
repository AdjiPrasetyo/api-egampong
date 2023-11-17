<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pindah extends Model
{
    use HasFactory;
    protected $table = "pindah";
    protected $fillable = [
        'id',
        'ktp_id',
        'keterangan',
    ];
    public $timestamps = true;
    public $incrementing = false;
}

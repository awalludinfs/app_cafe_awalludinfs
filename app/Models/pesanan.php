<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pesanan_id',
        'nama_pegawai',
        'nama_pembeli',
        'jenis',
        'nama',
        'jumlah',
        'harga',
        'total',
        'no_meja',
        'status_meja',
        'status',
    ];
    protected $table="pesanan";
}


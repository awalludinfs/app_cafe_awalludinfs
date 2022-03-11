<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomermeja extends Model
{
    use HasFactory;
    protected $fillable=[
        'meja_id',
        'nomer',
        'no_meja',
    ];
    protected $table="nomermeja";
}

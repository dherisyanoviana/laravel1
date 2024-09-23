<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanBuku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_buku',
        'stok',
        'harga',
    ];
}

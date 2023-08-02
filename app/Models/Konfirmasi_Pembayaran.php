<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi_Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'konfirmasi_pembayaran';

    protected $fillable = [
        'nama_penumpang',
        'image',
        'id_pemesanan',
    ];
}

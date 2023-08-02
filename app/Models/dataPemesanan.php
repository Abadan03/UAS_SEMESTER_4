<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataPemesanan extends Model
{
    use HasFactory;

    protected $table = 'data_pemesanan'; // Specify the table name

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}

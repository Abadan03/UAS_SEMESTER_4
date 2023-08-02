<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    use HasFactory;

    protected $table = 'terminal'; // Specify the table name

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // public function dataPemesanan()
    // {
    //     return $this->hasMany(Ticket::class);
    // }

    public function dataPemesanan()
    {
        return $this->hasMany(dataPemesanan::class);
    }
}

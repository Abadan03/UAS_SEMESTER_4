<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket'; // Specify the table name

    // Define the inverse relationship with the Terminal model
    // public function terminal()
    // {
    //     return $this->belongsTo(Terminal::class);
    // }

    public function terminal()
    {
        return $this->belongsTo(Terminal::class, 'terminal_keberangkatan_id');
    }


    public function dataPemesanan()
    {
        return $this->belongsTo(dataPemesanan::class, 'id_tiket');
    }
}

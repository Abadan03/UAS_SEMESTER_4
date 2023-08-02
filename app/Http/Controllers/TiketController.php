<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller
{
    //

    public function index(Request $request)
    {

        $data_pemesanan = $request->pemesanan;

        return view('tiket', compact('data_pemesanan'));
    }
}

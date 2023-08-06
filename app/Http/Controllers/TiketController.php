<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Terminal;
use App\Models\Ticket;
use App\Models\dataPemesanan;
use App\Models\Konfirmasi_Pembayaran;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    //

    public function index(Request $request)
    {

        $userId = Auth::user()->id;
        // $data_pemesanan = collect(DB::select("select * from data_pemesanan where id_user ='$userId' "));

        $id_tiket = collect(DB::select("
            SELECT * FROM data_pemesanan WHERE id_user = $userId
        "));

        // $id_tiket_values = $id_tiket->pluck('id_tiket');

        // $first_id_tiket = $id_tiket_values->first();
        // return view('riwayat-pemesanan', compact('data_pemesanan', 'tickets'));

        $data_pemesanan = $request->pemesanan;
        $ticketIds = $id_tiket->pluck('id_tiket')->toArray();
        // $id_pemesanan = $idPemesanan;
        // $id_pemesanan = $request->input('id_pemesanan');
        // $id_pemesanan = $request->;


        $tiket = Ticket::whereIn('id', $ticketIds)->get();
        // $tiket = Ticket::whereIn

        return view('tiket', compact('data_pemesanan', 'tiket'));
        // return var_dump($id_pemesanan);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Terminal;
use App\Models\Ticket;
use App\Models\dataPemesanan;
use App\Models\Konfirmasi_Pembayaran;
use Illuminate\Support\Facades\Auth;


class KonfirmasiPembayaran extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->all();
        $nama_user = $request->nama_penumpang;
        $id_pemesanan = $request->id_pemesanan;
        $image = $request->image;
        // DB::insert('konfirmasi_pembayaran', [
        //         'nama_penumpang' => $nama_user,
        //         'image' => $image,
        //         'id_pemesanan' => $id_pemesanan,
        // ]);
        $konfirmasi_pembayaran = new Konfirmasi_Pembayaran();
        $konfirmasi_pembayaran->nama_penumpang = $nama_user;
        $konfirmasi_pembayaran->image = $image;
        $konfirmasi_pembayaran->id_pemesanan = $id_pemesanan;
        $konfirmasi_pembayaran->save();
        // return var_dump($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $konfirmasi, Request $idPemesanan)
    {
        //
        // return var_dump($konfirmasi, true);
        // $test = $konfirmasi->nama_penumpangan;

        $id = $konfirmasi;
        $userId = Auth::user()->id;
        $id_tiket = collect(DB::select("
        SELECT * FROM data_pemesanan WHERE id_user = $userId
        "));


        $ticketIds = $id_tiket->pluck('id_user')->toArray();
        // $idPemesanan = $id_tiket->pluck('id_pemesanan')->toArray();
        $id_pemesanan = $idPemesanan->idPemesanan;


        $data_user = dataPemesanan::whereIn('id_user', $ticketIds)->firstOrFail();
        // $id_pemesanan = dataPemesanan::whereIn('id_pemesanan', $idPemesanan)->firstOrFail();
        // $id_pemesanan = $idPemesanan;

        $konfirmasiArray = [$konfirmasi];
        $tickets = Ticket::whereIn('id', $konfirmasiArray)->get();

        // TESTTTTTTTTTTTTTTTTT
        $id_tiket = collect(DB::select("
            SELECT * FROM data_pemesanan WHERE id_user = $id
        "));

        $test_tiket = Ticket::find($konfirmasi);

        $ticketIds = $id_tiket->pluck('id_tiket')->toArray();

        $id_tiket_values = $id_tiket->pluck('id_tiket');

        $first_id_tiket = $id_tiket_values->first();
        $tickets_data = Ticket::whereIn('id', $ticketIds)->get();

        return view('review', compact('data_user', 'tickets', 'tickets_data', 'id_tiket', 'id', 'test_tiket', 'id_pemesanan'));
        // return var_dump($id_pemesanan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

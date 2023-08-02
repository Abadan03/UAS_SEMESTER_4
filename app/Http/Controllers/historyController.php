<?php

namespace App\Http\Controllers;

use App\Models\dataPemesanan;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historyController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $data_pemesanan = collect(DB::select("select * from data_pemesanan where id_user ='$userId' "));

        $id_tiket = collect(DB::select("
            SELECT * FROM data_pemesanan WHERE id_user = $userId
        "));

        $ticketIds = $id_tiket->pluck('id_tiket')->toArray();
        $id_tiket_values = $id_tiket->pluck('id_tiket');

        $first_id_tiket = $id_tiket_values->first();
        $tickets = Ticket::whereIn('id', $ticketIds)->get();
        return view('riwayat-pemesanan', compact('data_pemesanan', 'tickets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        // $uniqueCode = substr(uniqid() . mt_rand(1000, 9999), 0, 9);
        $min = 10000000; // 1,000,000,0
        $max = 99999999; // 9,999,999
        do {
            $uniqueCode = mt_rand($min, $max);
            # code...
            $exists = DB::table('data_pemesanan')
                ->where('id_pemesanan', $uniqueCode)
                ->exists();
        } while ($exists);
        $dataPemesanan = new dataPemesanan;
        $dataPemesanan->id_tiket = $request->id_tiket;
        $dataPemesanan->id_user = $request->id_user;
        $dataPemesanan->nama_penumpang = $request->nama_penumpang;
        $dataPemesanan->status = $request->status;
        $dataPemesanan->email = $request->email;
        $dataPemesanan->no_telpon = $request->no_telpon;
        $dataPemesanan->id_pemesanan = $uniqueCode;

        $dataPemesanan->save();
        // return var_dump($request->no_telpon, true);

        // return var_dump($request->input('nama_penumpang'), $request->input('id_tiket'));

        return redirect()->route('riwayat.index')->with('success', 'Data stored successfully.');
    }

    public function show(string $id)
    {
        //
        return var_dump($id, true);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Terminal;
use App\Models\Ticket;
use App\Models\dataPemesanan;
use Illuminate\Support\Facades\Storage;
class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pembayaran');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }




    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {

        $id_pemesanan = $id;



        // Data pemesanan
        $data_user = dataPemesanan::where('id_pemesanan', $id)->get();
        $column_value = $data_user->first()->id_tiket;


        // Data ticket yang dipilih user
        $tiket_user = Ticket::find($column_value);

        // return var_dump($data_user);
        return view('pembayaran', compact('tiket_user', 'data_user'));
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
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

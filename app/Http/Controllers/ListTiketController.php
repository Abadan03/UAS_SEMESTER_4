<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminal;
use App\Models\Ticket;
class ListTiketController extends Controller
{
    //
    public function index(Request $request)
    {

        $results = array_filter($request->all());

        $terminals = Terminal::all();
        $tickets = Ticket::all();

        // $keberangkatan = $request->input('keberangkatan');
        // $tujuan = $request->input('tujuan');
        return view('listtiket', ['results' => $results], compact('terminals', 'tickets'));
        // return view('listtiket');
    }
}

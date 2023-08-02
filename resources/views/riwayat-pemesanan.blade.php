<?php
    // use App\Models\dataPemesanan;
    use App\Models\Ticket;
    // $userId = Auth::user()->id();

    // Query the user data using the ID
    // $user = \App\Models\dataPemesanan::find($userId);
    // $tickets = dataPemesanan::find(Auth::user()->id)->get();
    // $tickets = dataPemesanan::where('id_user', Auth::user()->id)->get();
    // var_dump($tickets);
?>
@extends('layouts.defaults')
@section('content')

    <!-- riwayat -->
    <section id="riwayat-pemesanan" class="container align-items-center" style="background-color: #ECF6FE">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            <br>
                        @endif
        @foreach ($data_pemesanan as $pemesanan)
            {{-- @foreach ($tickets as $ticket) --}}

                <div class="container">
                    <div class="d-flex gap-4 cardlist">
                        <div class="col-md-4 riwayat-1">
                            <h4>No. ID Pemesanan : {{ $pemesanan->id_pemesanan }}</h4>
                            {{-- <h5>Terminal Keberangkatan : {{ $t::all()terminal_keberangkatan }}</h5> --}}
                            <h5>
                                @foreach ($tickets as $ticket)

                                @if ($ticket->id == $pemesanan->id_tiket)
                                        {{ $ticket->nama_travel }}
                                @endif
                                @endforeach
                            </h5>
                            <h5>
                                {{-- Terminal Keberangkatan : {{ $pemesanan->tickets->terminal_keberangkatan_id }}</h5> --}}
                                Terminal Keberangkatan :
                                @if ($pemesanan->id_tiket == 1)
                                    Surabaya
                                @elseif ($pemesanan->id_tiket == 2)
                                    Sidoarjo
                                @elseif ($pemesanan->id_tiket == 3)
                                    Sidoarjo
                                @elseif ($pemesanan->id_tiket == 4)
                                    Surabaya

                                @endif
                            </h5>
                            {{-- <h5>Terminal Keberangkatan : {{ $pemesanan_find->id_tiket->terminal->terminal_keberangkatan }}</h5> --}}
                            {{-- <h5>Terminal Keberangkatan : {{ $pemesanan->ticket->terminal->terminal_keberangkatan }}</h5> --}}
                            <h3>07.00</h3>
                            {{-- @foreach ($tickets as $data)
                                @if ($data->jam == $pemesanan->)

                                <h3>{{ $data->jam_tujuan }}</h3>
                                @endif
                            @endforeach --}}
                            {{-- <h3><?= $tickets['jam_tujuan'] ?></h3> --}}
                            <p>24 Juli 2023</p>
                        </div>
                        <div class="col-md-4 mt-5">
                            <img src="{{ Vite::asset('resources/images/arrow-listtiket.png') }}" alt="">
                        </div>
                        <div class="col-md-4 riwayat-2">
                            <h4>
                                Status
                                <?php $checkStatus = $pemesanan->status; ?>
                                @if ($checkStatus == 0)
                                        Pending
                                    @elseif ($checkStatus == 1)
                                        Berhasil
                                    @elseif ($checkStatus == 3)
                                        Canceled
                                    @elseif ($checkStatus == 4)
                                        Waiting
                                @endif
                                {{-- {{ $pemesanan->status }} --}}
                            </h4>
                            {{-- <h5>Terminal Tujuan: {{ $pemesanan->id_tiket }}</h5> --}}
                            <h5>
                                {{-- Terminal Tujuan : --}}
                                {{-- {{ $ticket->terminal_tujuan }} --}}
                                {{-- {{ $pemesanan->$tickets->terminal_tujuan }} --}}
                                {{-- Access ticket data based on $pemesanan->id_tiket --}}
                                Terminal Tujuan:
                                @foreach ($tickets as $ticket)
                                    @if ($ticket->id == $pemesanan->id_tiket)
                                        {{ $ticket->terminal_tujuan }}
                                    @endif
                                @endforeach
                                {{-- @if ($pemesanan->id_tiket == 1)
                                    Madiun
                                @elseif ($pemesanan->id_tiket == 2)
                                    Sidoarjo --}}
                                {{-- @elseif ($pemesanan->id_tiket == 3) --}}

                                {{-- @elseif ($pemesanan->id_tiket == 0) --}}

                                {{-- @endif --}}
                            </h5>
                            {{-- <h5>Terminal Tujuan: {{ $ticket->terminal }}</h5> --}}
                            <h3>07.00</h3>
                            <p>24 Juli 2023</p>
                            @if ($pemesanan->status == 0)
                                <a href="{{ route('konfirmasi.show', ['konfirmasi' => $pemesanan->id_tiket]) }}">Bayar</a>
                                @elseif ($pemesanan->status == 1)
                                <a href="{{ route('tiket.index', ['pemesanan' => $pemesanan]) }}">Detail</a>
                            @endif
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        @endforeach
    </section>

@endsection

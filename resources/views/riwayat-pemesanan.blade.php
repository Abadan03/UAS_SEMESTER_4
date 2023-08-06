
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


                <div class="container">
                    <div class="d-flex gap-4 cardlist">
                        <div class="col-md-4 riwayat-1">
                            <h4>No. ID Pemesanan : {{ $pemesanan->id_pemesanan }}</h4>
                            <h5>
                                @foreach ($tickets as $ticket)

                                @if ($ticket->id == $pemesanan->id_tiket)
                                        {{ $ticket->nama_travel }}
                                @endif
                                @endforeach
                            </h5>
                            <h5>

                                Terminal Keberangkatan :
                                @if ($pemesanan->id_tiket == 1)
                                    Bungurasih
                                @elseif ($pemesanan->id_tiket == 2)
                                    Ramayana
                                @elseif ($pemesanan->id_tiket == 3)
                                    Ramayana
                                @elseif ($pemesanan->id_tiket == 4)
                                    Bungurasih

                                @endif
                            </h5>

                            <?php $tiketId = $pemesanan->id_tiket ?>
                            @foreach ($tickets as $data)
                                @if ($data->id == $tiketId)
                                    <h3>{{ $data->jam_keberangkatan }}</h3>
                                @endif
                            @endforeach
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

                            </h4>

                            <h5>
                                Terminal Tujuan:
                                @foreach ($tickets as $ticket)
                                    @if ($ticket->id == $pemesanan->id_tiket)
                                        {{ $ticket->terminal_tujuan }}
                                    @endif
                                @endforeach

                            </h5>

                            <?php $tiketId = $pemesanan->id_tiket ?>
                            @foreach ($tickets as $data)
                                @if ($data->id == $tiketId)
                                    <h3>{{ $data->jam_tujuan }}</h3>
                                @endif
                            @endforeach
                            <p>24 Juli 2023</p>
                            @if ($pemesanan->status == 0)
                                <a href="{{ route('konfirmasi.show', ['konfirmasi' => $pemesanan->id_tiket, 'idPemesanan' => $pemesanan->id_pemesanan]) }}">Bayar</a>

                                @elseif ($pemesanan->status == 1)
                                <a href="{{ route('tiket.index', ['pemesanan' => $pemesanan]) }}">Detail</a>
                            @endif
                        </div>
                    </div>
                </div>
        @endforeach
    </section>

@endsection

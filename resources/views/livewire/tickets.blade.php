<div class="list-tiket">

    {{-- Because she competes with no one, no one can compete with her. --}}
{{--
    <ul class="list-group">
        DATA
        @if ($tickets && $tickets->count() > 0)
            @foreach ($tickets as $ticket)

                <li class="list-group-item">
                    {{ $ticket->nama_travel }}
                </li>
            @endforeach
        @else
        <p class="text-danger">No tickets found</p>
        @endif
    </ul> --}}

    <div class="row mt-5">
        {{-- @if ($tickets ===)

        @endif --}}
        @if ($tickets)
            @foreach ($tickets as $ticket)
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                            <form action="{{ route('riwayat.store') }}" method="post">
                                @csrf
                                <h5 class="card-title">{{ $ticket->nama_travel }}</h5>
                                {{-- Input Hidden untuk data dari user tanpa menggunakan 2 parameter  --}}
                                <input type="hidden" name="nama_penumpang" id="nama_penumpang" value="{{ Auth::user()->name }}">
                                <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                                <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="no_telpon" id="no_telpon" value="{{ Auth::user()->no_telpon }}">
                                <input type="hidden" name="id_tiket" id="id_tiket" value="{{ $ticket->id }}">
                                <input type="hidden" name="status" id="status" value="0">
                                {{-- Input Hidden untuk data dari user tanpa menggunakan 2 parameter END --}}
                                <h6 class="card-subtitle mb-4 text-body- mt-1">{{ $ticket->nama_travel }}</h6>
                                <div class="row">
                                    <div class="col">
                                        {{-- <h3>07.00</h3> --}}
                                        <h3>{{ $ticket->jam_keberangkatan }}</h3>
                                    </div>
                                    <div class="col">
                                        {{-- <p>{{ $ticket->terminal_keberangkatan_id->terminals->terminal_keberangkatan }}</p> --}}
                                        <p> Terminal Keberangkatan : {{ $ticket->terminal->terminal_keberangkatan }}</p>
                                        {{-- <p>{{ optional($ticket->terminal)->terminal_keberangkatan ?? 'Terminal Not Found' }}</p> --}}
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            {{-- <h3>10.00</h3> --}}
                                            <h3>{{ $ticket->jam_tujuan }}</h3>
                                        </div>
                                        <div class="col">
                                            <p> Terminal Tujuan : {{ $ticket->terminal_tujuan }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>Tersedia : {{ $ticket->jumlah_tiket }} Kursi</p>
                                            <p>Kota Keberangkatan: {{ $ticket->kota_keberangkatan }}</p>
                                            <p>Kota Tujuan: {{ $ticket->kota_tujuan }}</p>
                                            <p style="color: #FF9212">Harga : Rp {{ $ticket->harga_tiket }}.000 <span style="color: #535D6A">/kursi</span></p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Pesan</button>
                                    {{-- <a class="btn btn-primary" href="{{ route('dataPenumpang', ['id' => $ticket->id]) }}" type="submit">Pesan</a> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
        @elseif ($terminals) {
            @foreach ($terminals as $ticket)
            <div class="col">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <form action="{{ route('riwayat.store') }}" method="post">
                            @csrf
                            <h5 class="card-title">{{ $ticket->nama_travel }}</h5>
                            {{-- Input Hidden untuk data dari user tanpa menggunakan 2 parameter  --}}
                            <input type="hidden" name="nama_penumpang" id="nama_penumpang" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                            <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="no_telpon" id="no_telpon" value="911">
                            <input type="hidden" name="id_tiket" id="id_tiket" value="{{ $ticket->id }}">
                            <input type="hidden" name="status" id="status" value="0">
                            {{-- Input Hidden untuk data dari user tanpa menggunakan 2 parameter END --}}
                            <h6 class="card-subtitle mb-4 text-body- mt-1">{{ $ticket->nama_travel }}</h6>
                            <div class="row">
                                <div class="col">
                                    {{-- <h3>07.00</h3> --}}
                                    <h3>{{ $ticket->jam_keberangkatan }}</h3>
                                </div>
                                <div class="col">
                                    {{-- <p>{{ $ticket->terminal_keberangkatan_id->terminals->terminal_keberangkatan }}</p> --}}
                                    <p> Terminal Keberangkatan : {{ $ticket->terminal->terminal_keberangkatan }}</p>
                                    {{-- <p>{{ optional($ticket->terminal)->terminal_keberangkatan ?? 'Terminal Not Found' }}</p> --}}
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        {{-- <h3>10.00</h3> --}}
                                        <h3>{{ $ticket->jam_tujuan }}</h3>
                                    </div>
                                    <div class="col">
                                        <p> Terminal Tujuan : {{ $ticket->terminal_tujuan }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Tersedia : {{ $ticket->jumlah_tiket }} Kursi</p>
                                        <p>Kota Keberangkatan: {{ $ticket->kota_keberangkatan }}</p>
                                        <p>Kota Tujuan: {{ $ticket->kota_tujuan }}</p>
                                        <p style="color: #FF9212">Harga : Rp {{ $ticket->harga_tiket }}.000 <span style="color: #535D6A">/kursi</span></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Pesan</button>
                                {{-- <a class="btn btn-primary" href="{{ route('dataPenumpang', ['id' => $ticket->id]) }}" type="submit">Pesan</a> --}}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        }
        @endif

</div>

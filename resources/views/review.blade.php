@extends('layouts.defaults')
@section('content')


    <!-- =======main content======= -->
    <section class="main-content d-flex">
        <div class="container mt-4">
            <div class="row">
                <h2>Konfirmasi Pembayaran</h2>
                <p class="text-warning">Pastikan Pesanan Anda Benar Sebelum Melanjutkan Pembayaran</p>
                <hr>
                {{-- Tampilan halaman untuk edit dan Rincian harga --}}
                <div class="col-md-7">
                    <h2>Rincian Penumpang</h2>
                    {{-- bagian ini nanti akan menampilkan isi dari form input sebelumnya --}}
                    <div class="review-form bg-light rounded-2">
                        <div class="row p-2">
                            <div class="form-floating mb-2">
                                <h3 type="email" class="form-control" id="floatingNamapenumpang"
                                    placeholder="name@example.com">{{ $data_user->nama_penumpang }}</h3>
                                <label for="floatingNamapenumpang">Nama Penumpang</label>
                            </div>
                            <div class="form-floating mb-2">
                                <h3 type="no.telepon" class="form-control" id="floatingTelepon"
                                    placeholder="No.Telepon">{{ $data_user->no_telpon}}</h3>
                                <label for="floatingTelepon">No.Telepon</label>
                            </div>
                            <div class="form-floating">
                                <h3 type="email" class="form-control" id="floatingEmail" placeholder="email">
                                    {{ $data_user->email }}
                                </h3>
                                <label for="floatingEmail">Email</label>
                            </div>
                            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                <button class="btn btn-primary" type="button">Edit</button>
                            </div> --}}
                        </div>
                    </div>
                    <h2 class="mt-3">Rincian Harga</h2>
                    <div class="review-form bg-light rounded-2 col-md-8">
                        <div class="row p-2">
                            <h5>Harga Yang Anda Bayar</h5>
                            <div class="harga-content d-flex justify-content-between">
                                <p class="fs-6">{{ $test_tiket->nama_travel }}</p>
                                <p class="text-warning fs-6 mx-4">Rp
                                {{ $test_tiket->harga_tiket }}
                                .000</p>
                            </div>
                            <?php $idTiket = $test_tiket->id ?>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                {{-- <form action="{{ route('pembayaran.show', $test_tiket->id) }}" method="POST"> --}}
                                    {{-- @csrf --}}
                                    {{-- @method('PUT') --}}
                                {{-- <form action="{{ route('pembayaran.show', $test_tiket->id) }}" > --}}
                                    {{-- @csrf --}}
                                    {{-- <input type="hidden" name="id" value="{{ $idTiket }}"> --}}
                                    {{-- <button class="btn btn-warning text-white" type="submit">
                                        Pembayaran
                                    </button> --}}
                                    <a href="{{ route('pembayaran.show', ['pembayaran' => $data_user->id_pemesanan]) }}" class="btn btn-warning text-white" >
                                        Pembayaran
                                    </a>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tampilan untuk ID dan tampilan informasi keberangkatan --}}
                <div class="col-md-5 d-flex flex-column">
                    <div class="bg-light rounded-3 mb-3">
                        <div class="id-pesanan d-flex gap-3 p-3 justify-content-between">
                            <p class="fs-5">No.ID Pesanan</p>
                            <p class="fs-5">{{ $data_user->id_pemesanan }}</p>
                        </div>
                    </div>
                    <div class="bg-light rounded-3">
                        <div class="id-pesanan gap-3 p-3">
                            <h5><img src="{{ Vite::asset('resources/images/logo-bisbus.png') }}"
                            class="me-3">Keberangkatan</h5>
                            <h6>Tanggal Keberangkatan</h6>
                            <h6>Nama Armada Yang Dipilih : {{ $test_tiket->nama_travel }}</h6>
                            {{-- dipanggil dari kota dan terminal keberangkatan yang dipilih --}}
                            <div class="berangkat">
                                <h6>Kota Berangkat : {{ $test_tiket->kota_keberangkatan }}</h6>
                                <p class="fs-6">Terminal Keberangkatan :
                                    @if ($test_tiket->terminal_keberangkatan_id == 1)
                                        Bungurasih
                                        @elseif($test_tiket->terminal_keberangkatan_id == 2)
                                        Ramayana
                                    {{-- {{ $test_tiket->terminal_keberangkatan_id }} --}}
                                    @endif
                                </p>
                            </div>
                            {{-- dipanggil dari kota dan terminal tujuan yang dipilih --}}
                            <div class="tujuan">
                                <h6>Kota Tujuan : {{ $test_tiket->kota_tujuan }}</h6>
                                <p class="fs-6">Terminal Tujuan : {{ $test_tiket->terminal_tujuan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

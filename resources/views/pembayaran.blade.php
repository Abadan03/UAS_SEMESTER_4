
@extends('layouts.defaults')
@section('content')
    {{-- main content-upload --}}
    <section class="content-upload mt-4" style="background-color: #ECF6FE">
        <div class="container col-md-6">
            <div class="row">
                <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="rounded-2" style="background-color: #FFFFFE">
                        <div class="row p-2 justify-content-center aligt-item-center">
                            <div class="harga-content d-flex justify-content-between">
                                <p class="fs-6">ID Pesanan :</p>
                                @foreach ($data_user as $data)

                                    <p class="fs-6 mx-4">{{ $data->id_pemesanan }}</p>
                                    <input type="hidden" id="nama_penumpang" name="nama_penumpang" value="{{ $data->nama_penumpang }}">
                                    <input type="hidden" id="id_pemesanan" name="id_pemesanan" value="{{ $data->id_pemesanan }}">
                                @endforeach
                                {{-- <p class="fs-6 mx-4">{{ $data_user->id_pemesanan }}</p> --}}
                            </div>
                            <div class="harga-content d-flex justify-content-between">
                                <p class="fs-6">Rekening Perusahaan :</p>
                                <p class="fs-6 mx-4">123249453863</p>
                            </div>
                            <hr>
                            <h5>Rincian Harga</h5>
                            <div class="harga-content d-flex justify-content-between">
                                {{-- <p class="fs-6">Alfath Travel (x1)</p> --}}
                                <p class="fs-6">{{ $tiket_user->nama_travel }}</p>
                                <p class="text-warning fs-6 mx-4">
                                    Rp
                                    {{ $tiket_user->harga_tiket }}
                                    .000</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </section>
@endsection

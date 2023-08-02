@extends('layouts.defaults')
@section('content')

<div class="main-content">
    <div class="container">
        <div class="row">

        <!-- <p  class="text-secondary">Isi Data Penumpang</p> -->
        <hr>
        <h4 class="title-form mt-5 text-dark">Data Konfirmasi</h4>
    <table class="" id="dasboard" class="" style="border: 1px solid">
        <thead>
            <tr>
                <th scope="col">ID Pemesanan</th>
                <th scope="col">Nama Penumpang</th>
                <th scope="col">Status</th>
                <th scope="col">Bukti Pembayaran</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
            @foreach($data_konfirmasi as $data)
            <tr>
                <td>{{ $data->id_pemesanan }}</td>
                <td>{{ $data->nama_penumpang }}</td>
                <td><?php
                        switch($data->status)
                        {
                            case "0":
                                echo "Belum Konfirmasi";
                            break;
                            case "1":
                                echo "Sudah Konfirmasi";
                            break;
                            case "3":
                                echo "Dibatalkan";
                            break;
                            case "4":
                                echo "Menunggu admin untuk konfirmasi";
                            break;
                        }
                    ?>
                    </td>
                <td><u><b><a href="storage/files/<?php echo $data->image ?>" target="_blank"> Lihat Bukti </a></b></u></td>
                <td>
                    <?php
                        if($data->status != 4)
                        {
                            echo "-";
                        }
                        else
                        {
                    ?>
                    <form action="/confirm_order/" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id_pemesanan" name="id_pemesanan" value="{{ $data->id_pemesanan }}">
                        <button>Konfirm</button>
                    </form>
                    <form action="/cancel_order/" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="id_pemesanan" name="id_pemesanan" value="{{ $data->id_pemesanan }}">
                        <button>Batalkan</button></a>
                    </form>
                    <?php
                        }
                    ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    @foreach ($tiket as $data)
                        @if ($data->id == $data_pemesanan['id_tiket'])

                        <div class="card-header bg-transparent header-elements-inline">
                            <h6 class="card-title text-primary">
                                {{ $data->kota_keberangkatan }} -> {{ $data->kota_tujuan}} | {{ $data->jam_keberangkatan }} -> {{ $data->jam_tujuan }}
                            </h6>
                        </div>

                        @endif
                    @endforeach


                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    {{-- Terminal Keberangkatan :
                                @if ($pemesanan->id_tiket == 1)
                                    Surabaya
                                @elseif ($pemesanan->id_tiket == 2)
                                    Sidoarjo
                                @elseif ($pemesanan->id_tiket == 3)
                                    Sidoarjo
                                @elseif ($pemesanan->id_tiket == 4)
                                    Surabaya

                                @endif --}}
                                @foreach ($tiket as $data)
                                    @if ($data->id == $data_pemesanan['id_tiket'])

                                    <div class="card-header bg-transparent header-elements-inline">
                                        <h6 class="card-title text-primary">Terminal :
                                            @if ($data->terminal_keberangkatan_id == 1)
                                                Bungurasih
                                            @elseif ($data->terminal_keberangkatan_id == 2)
                                                Ramayana

                                            @endif ->
                                            {{ $data->terminal_tujuan}}
                                        </h6>
                                    </div>
                                    @endif
                                @endforeach

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">Id Pemesanan #<?= $data_pemesanan['id_pemesanan'] ?></h4>
                                        <ul class="list list-unstyled mb-0">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                        <h5 class="my-2"><?= $data_pemesanan['nama_penumpang'] ?></h5>
                                    </li>
                                    <li><?= $data_pemesanan['no_telpon'] ?></li>
                                    <li><a href="#" data-abc="true"><?= $data_pemesanan['email'] ?>.com</a></li>
                                </ul>
                            </div>
                            <div class="mb-2 ml-auto"> <span class="text-muted">Payment Details:</span>
                                <div class="d-flex flex-wrap wmin-md-400">
                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>
                                            <h5 class="my-2">Total Due:</h5>
                                        </li>
                                    </ul>
                                    <ul class="list list-unstyled text-right mb-0 ml-auto">
                                        <li>
                                            <h5 class="font-weight-semibold my-2">Sudah Terbayar</h5>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        {{-- @endforeach --}}
                        </div>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
    </script>
</body>

</html>

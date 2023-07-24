<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BisBus-Pembayaran</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    {{-- main content-upload --}}
    <section class="content-upload mt-4" style="background-color: #ECF6FE">
        <div class="container col-md-6">
            <div class="row">
                <form action="" class="rounded-2" style="background-color: #FFFFFE">
                    <div class="row p-2 justify-content-center aligt-item-center">
                        <div class="harga-content d-flex justify-content-between">
                            <p class="fs-6">ID Pesanan :</p>
                            <p class="fs-6 mx-4">09754346789</p>
                        </div>
                        <div class="harga-content d-flex justify-content-between">
                            <p class="fs-6">Rekening Perusahaan :</p>
                            <p class="fs-6 mx-4">123249453863</p>
                        </div>
                        <hr>
                        <h5>Rincian Harga</h5>
                        <div class="harga-content d-flex justify-content-between">
                            <p class="fs-6">Alfath Travel (x1)</p>
                            <p class="text-warning fs-6 mx-4">Rp. 45.000</p>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-warning text-light" type="button">Upload Bukti Pembayaran</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @vite('resources/js/app.js')
</body>

</html>

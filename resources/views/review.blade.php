<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BisBus || Home</title>
    {{-- AOS ANIMATION --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/sass/app.scss')
</head>

<body>

    <!-- ======= Header ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary position-fixed w-100">
        <div class="container justify-content-end">
            <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resource/images/logo-bisbus.png') }}"
                    alt="" width="30" class="d-inline-block align-text-top me-3"><Span
                    class="">Bis</Span>Bus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#">Cari Tiket</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Tiket Saya</a>
                    </li>
                </ul>

                <div>
                    <button class="button-primary">Sign Up</button>
                    <button class="button-secondary">Sign In</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- =======main content======= -->
    <section class="main-content d-flex-column justify-content-center">
        <div class="container mt-4">
            <div class="row">
                <h2>Data Pemesanan</h2>
                <p class="text-warning">Pastikan Pesanan Anda Benar Sebelum Melanjutkan Pembayaran</p>
                <hr>
                {{-- Tampilan halaman untuk edit dan Rincian harga --}}
                <div class="col-md-7">
                    <h2>Data Pemesan</h2>
                    {{-- bagian ini nanti akan menampilkan isi dari form input sebelumnya --}}
                    <div class="review-form bg-light rounded-2">
                        <div class="row p-2">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingNamapenumpang"
                                    placeholder="name@example.com">
                                <label for="floatingNamapenumpang">Nama Penumpang</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="no.telepon" class="form-control" id="floatingTelepon"
                                    placeholder="No.Telepon">
                                <label for="floatingTelepon">No.Telepon</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="email">
                                <label for="floatingEmail">Email</label>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
                                <button class="btn btn-primary" type="button">Edit</button>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-2">Rincian Harga</h2>
                    <div class="review-form bg-light rounded-2 col-md-8">
                        <div class="row p-2">
                            <h5>Harga Yang Anda Bayar</h5>
                            <div class="harga-content d-flex">
                                <p class="col-md-4 fs-6">Alfath Travel (x1)</p>
                                <p class="text-warning col-md-3 fs-6 mx-4">Rp. 45.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tampilan untuk ID dan tampilan informasi keberangkatan --}}
                <div class="harga-content d-flex">
                    <p class="col-md-4 fs-6">No.ID Pesanan</p>
                    <p class="text-warning col-md-3 fs-6 mx-4">837487259734</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= section Footer ======= -->
    <footer class="p-5">
        <div class="container">
            {{-- Content --}}
            <div class="d-flex flex-row content-footer">
                {{-- Description section --}}
                <div class="description">
                    <p><span id="footer-bis">Bis</span><span id="footer-bus">Bus</span></p>
                    <p class="content">Lorem ipsum dolor sit amet consectetur. Diam dolor pulvinar cras volutpat neque
                        odio pellentesque iaculis egestas.</p>
                </div>
                <div class="w-100 d-flex justify-center gap-lg-5 secondary-content">
                    <div class="flex-row">
                        <h5>Help</h5>
                        <h6 class="">Help Center</h6>
                        <h6 class="">FAQs</h6>
                        <h6 class="">Privacy Policy</h6>
                        <h6 class="">Cookie Policy</h6>
                    </div>
                    <div class="flex-row">
                        <h5>Company</h5>
                        <h6>About us</h6>
                        <h6>Blog</h6>
                        <h6>Careers</h6>
                    </div>
                    <div class="flex-row">
                        <h5>Destination</h5>
                        <h6>Countries/Territories</h6>
                        <h6>Cities</h6>
                    </div>
                </div>
            </div>
            {{-- Content End --}}
            <hr>
            {{-- Logo Media --}}
            <div class="media-social d-flex justify-content-end gap-3">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
            {{-- Logo Media End --}}
        </div>
    </footer>
    <!-- End Footer -->

</body>

</html>

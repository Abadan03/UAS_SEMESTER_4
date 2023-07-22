<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BisBus || Home</title>
    @vite('resources/sass/app.scss')
    {{-- AOS ANIMATION --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!-- ======= Header ======= -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent w-100">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/img/logo-bisbus.png" alt="" width="30"
                    class="d-inline-block align-text-top me-3"><Span class="">Bis</Span>Bus</a>
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

    <!-- =======body content======= -->


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

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
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Cari Tiket</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Tiket Saya</a>
                    </li>
                </ul>

                <div class="d-flex w-full align-items-center gap-3">
                    @guest
                        @if (Route::has('register'))
                        <div class=" button-primary">
                            <a class="text-black" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        </div>
                        @endif
                        @if (Route::has('login'))
                            <div class="align-items-center">
                                <a class="px-4 py-2 button-secondary" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                            </div>
                        @endif
                    @else
                        <div class="container d-flex  align-items-center justify-content-center gap-3">
                            <div class="">
                                <a class="text-black button-secondary px-4 py-2" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            <div class="relative">
                                <div id="" class="">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>
                        </div>
                    @endguest

                    {{-- <button class="button-primary">Sign Up</button>
                    <button class="button-secondary">Sign In</button> --}}
                </div>
            </div>
        </div>
    </nav>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                <img src="{{ Vite::asset('resources/images/image_hero_section.svg') }}" alt="img_hero">
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Form search ticket section ======= -->
    <section id="form_search" class="form_search" data-aos="flip-down" data-aos-duration="1500" data-aos-once="true">
        <div class="container">
            <div class="row justify-content-end">
                <h5 class="mt-3 text-black">Tiket Bus</h5>
                {{-- Section Keberangkatan --}}
                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-geo-alt text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="keberangkatan" aria-label="keberangkata"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                {{-- Section Keberangkatan End --}}

                {{-- Section Tujuan --}}
                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-geo-alt text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="tujuan" aria-label="tujuan"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                {{-- Section Tujuan End --}}

                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        {{-- <h1 for="">Tanggal Keberangkatan</h1> --}}
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-calendar3 text-primary me-2"></i>Tanggal Keberangkatan</span>
                        <input type="date" class="form-control" placeholder="Tanggal Keberangkatan"
                            aria-label="tujuan" aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-person-fill text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="Jumlah Penumpang" aria-label="tujuan"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="text-end">
                        <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button"><i
                                class="bi bi-search px-2"></i>Cari Tiket</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End form search -->

    <!-- ======= section Service ======= -->
    <section id="service">
        <div class="container">
            <div class="row justify-content-center align-items-center gap-4 gap-lg-5">
                <div id="title-service" class="col-12 text-center">
                    <h2>Pelayanan Kami</h2>
                </div>

                <div class="card text-center">
                    <img src="{{ Vite::asset('resources/images/booking.svg') }}" class="card-img-top mt-3 mx-auto"
                        alt="booking_img">
                    <div class="card-title">Pesan Tiket</div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem unde
                            dicta
                            incidunt quod molestiae aperiam explicabo maiores labore accusantium, dolor cumque
                            cupiditate repellendus laboriosam error maxime architecto nemo iure voluptate.</p>
                    </div>
                </div>

                <div class="card text-center">
                    <img src="{{ Vite::asset('resources/images/annonate.svg') }}" class="card-img-top mt-3 mx-auto"
                        alt="booking_img">
                    <div class="card-title">Lihat Jadwal</div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem unde
                            dicta
                            incidunt quod molestiae aperiam explicabo maiores labore accusantium, dolor cumque
                            cupiditate repellendus laboriosam error maxime architecto nemo iure voluptate.</p>
                    </div>
                </div>

                <div class="card text-center">
                    <img src="{{ Vite::asset('resources/images/choose_seat.svg') }}" class="card-img-top mt-3 mx-auto"
                        alt="booking_img">
                    <div class="card-title">Dapatkan Kursi</div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem unde
                            dicta
                            incidunt quod molestiae aperiam explicabo maiores labore accusantium, dolor cumque
                            cupiditate repellendus laboriosam error maxime architecto nemo iure voluptate.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Service_section -->

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
    @vite('resources/js/app.js')

    {{-- AOS ANIMATION --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

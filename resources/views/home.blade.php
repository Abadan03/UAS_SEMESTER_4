<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BisBus-Home</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <!-- ======= Header ======= -->
    {{-- <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="#"><span>Bis</span>Bus</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Cari Tiket</a></li>
                    <li><a class="nav-link scrollto" href="#services">Cek Tiket</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-light me-md-2 text-primary" type="button" href="#">Sign Up</a>
                <a class="btn btn-primary" type="button" href="#">Sign In</a>
            </div>
        </div>
    </header><!-- End Header --> --}}

    <header class="header">
        <div class="header-inner">
            <div class="container-fluid px-lg-5">
                <nav class="navbar navbar-expand-lg my-navbar">
                    <a class="navbar-brand" href="#"><span class="logo">
                            <span>Bis</span>Bus
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"
                                style="margin:5px 0px 0px 0px;"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cari Tiket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cek Tiket</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="header-btn my-2 my-sm-0" type="submit">Sign Up</button>
                            <button class="header-btn my-2 my-sm-0" type="submit">Sign In</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <img src="{{ Vite::asset('resources/images/image_hero_section.svg') }}" alt="img_hero">
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Form search ticket section ======= -->
    <section id="form_search" class="form_search">
        <div class="container">
            <div class="row justify-content-end">
                <h5 class="mt-3 ">Tiket Bus</h5>

                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-geo-alt text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="keberangkatan" aria-label="keberangkata"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-geo-alt text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="tujuan" aria-label="tujuan"
                            aria-describedby="addon-wrapping">
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i
                                class="bi bi-calendar3 text-primary"></i></span>
                        <input type="text" class="form-control" placeholder="Tanggal Keberangkatan"
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
            <div class="row justify-content-between">
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
    </section> <!-- End Service_section -->

    <!-- ======= section Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <p><span id="footer-bis">Bis</span><span id="footer-bus">Bus</span> adalah Lorem ipsum dolor sit amet
                    consectetur.
                    Purus vitae ac
                    viverra egestas
                    proin
                    consectetur. Aliquam mi eget dictum vulputate blandit tincidunt. Quis sollicitudin mattis arcu
                    aliquam justo enim enim sed feugiat. Congue diam adipiscing lacus cras tempus adipiscing mollis.</p>
            </div>

            <div class="media-social">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- End Footer -->
    @vite('resources/js/app.js')
</body>

</html>

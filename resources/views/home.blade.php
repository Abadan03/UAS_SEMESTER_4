@extends('layouts.defaults')
@section('content')


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
        <form action="{{ url('getRequest') }}" method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <div class="container text-black">
                <div class="row justify-content-end">
                   <h1>ABOUT US</h1>
                   <hr>
                   <p>Bisbus adalah situs web yang menyediakan cara mudah dan nyaman untuk memesan tiket bus secara online. Situs ini menampilkan informasi bus terkait tujuan, dan jadwal yang dapat dipilih. Situs ini memberikan informasi harga dan fasilitas yang disediakan oleh perusahaan bus. Pelanggan dapat melakukan pembayaran melalui transfer bank untuk mempermudah pembayaran.</p>


                </div>
            </div>
        </form>
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
                        <p class="card-text">Pesan tiket Anda untuk acara favorit Anda dengan mudah dan cepat. Pilih dari berbagai acara yang tersedia, termasuk konser, film, dan pertunjukan. Anda juga dapat memilih kursi Anda secara online.</p>
                    </div>
                </div>

                <div class="card text-center">
                    <img src="{{ Vite::asset('resources/images/annonate.svg') }}" class="card-img-top mt-3 mx-auto"
                        alt="booking_img">
                    <div class="card-title">Lihat Jadwal</div>
                    <div class="card-body">
                        <p class="card-text">Lihat jadwal acara yang tersedia di kota Anda. Anda dapat mencari acara berdasarkan tanggal, travel, atau lokasi.</p>
                    </div>
                </div>

                <div class="card text-center">
                    <img src="{{ Vite::asset('resources/images/choose_seat.svg') }}" class="card-img-top mt-3 mx-auto"
                        alt="booking_img">
                    <div class="card-title">Pesankan Tiket Lebih Mudah</div>
                    <div class="card-body">
                        <p class="card-text">Proses yang sedeharna dalam pemesanan, membuatnya lebih cepat dan praktis bagi pelanggan.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Service_section -->


{{-- script AOS digunakan pada setiap file untuk bisa bekerja --}}
{{-- AOS ANIMATION --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


@endsection

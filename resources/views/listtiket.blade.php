<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- logo title -->
    <link rel="icon" href="assets/img/logo-bisbus.png" type="image/x-icon">

    <title>Bisbus</title>
    @vite('resources/sass/app.scss')
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100">
      <div class="container">
<a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/images/logo-bisbus.png')}}" alt="" width="30" class="d-inline-block align-text-top me-3">Bisbus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

          <div>
              <button class="button-primary">Sign Up</button>
              <button class="button-secondary">Sign In</button>
          </div>
        </div>
      </div>
    </nav>

    <!-- redirect search -->
    <section id="redirect-search">
        <div class="container h-50">
          <div class="row h-50">
            <div class="col-md-3 search-1 my-auto">
              <div class="back">
                <h3><img src="assets/img/maps-search.png" alt="">Keberangkatan</h3>
              </div>
            </div>
            <div class="col-md-3 search-1 my-auto">
              <div class="back">
                <h3><img src="assets/img/maps-search.png" alt="">Tujuan</h3>
              </div>
            </div>
            <div class="col-md-3 search-1 my-auto">
              <div class="back">
                <h3><img src="assets/img/icon-calender.png" alt="">Tanggal Berangkat</h3>
              </div>
            </div>
            <button class="col-md-3 button-list my-auto">Edit</button>
          </div>
          <div class="row back-tiket">
            <div class="col nama-travel">
              <h4>Alfath Travel</h4>
              <h5>Alfath Travel</h5>
            </div>
            <div class="col waktu-berangkat">
              <h4>10.00</h4>
              <p>Terminal Keberangkatan</p>
            </div>
            <div class="col icon-kanan">
              <img src="assets/img/arrow-listtiket.png" alt="">
            </div>
            <div class="col waktu-tujuan">
              <h4>14.00</h4>
              <p>Terminal Tujuan</p>
            </div>
            <div class="col stok-kursi">
              <h4>Tersedia</h4>
              <p>15 Kursi</p>
            </div>
            <div class="col harga">
              <h4>Rp45.000 <span>/kursi</span></h4>
              <button>Pesan Tiket</button>
            </div>
          </div>
        </div>
    </section>

    <script src=""></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

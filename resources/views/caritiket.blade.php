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

{{-- navbar start--}}
<nav class="navbar navbar-expand-lg navbar-dark nav-color bg-primary w-100">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/img/logo-bisbus.png" alt="" width="30" class="d-inline-block align-text-top me-3">Bisbus</a>
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
{{-- navbar end --}}

{{-- main content-form start--}}
<div class="main-content">
    <div class="container">
        <div class="row">
        <h4 class="title-form mt-5 text-dark">Data Pemesanan</h4>
        <p  class="text-secondary">Isi Data Penumpang</p>
        <hr>

        <form class="needs-validation mt-4" novalidate>
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Nama Penumpang</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid name is required.
                </div>
              </div>

              <div class="col-6">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" placeholder="">
                <div class="invalid-feedback">
                  Please enter a valid email
                </div>
              </div>

              <div class="col-6">
                <label for="address" class="form-label">No.Telepon</label>
                <input type="text" class="form-control" id="address" placeholder="" required>
                <div class="invalid-feedback">
                  Please enter your No Telepon.
                </div>
              </div>

              <div class="col-md-6">
                <label for="country" class="form-label">jumlah penumpang</label>
                <select class="form-select" id="country" required>
                  <option value="">0</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>

            <hr>
            <input type="submit" value="simpan data" class="submit-btn ">
          </form>
    </div>
</div>

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

{{-- main content-form end--}}
@vite('resources/js/app.js')
</body>
</html>

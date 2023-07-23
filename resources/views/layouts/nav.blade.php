@php
    $currentRouteName = Route::currentRouteName();
@endphp

{{-- nav bar header --}}
<header class="header" style="background-color: #A1CCD1">
    <div class="header-inner" style="background-color: #A1CCD1">
        <div class="container-fluid px-lg-5">
            <nav class="navbar navbar-expand-lg my-navbar">
                <a class="navbar-brand" href="#"><span class="logo">
                        <span>Bis</span>Bus
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
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

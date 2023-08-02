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
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('caritiket') }}">Cari Tiket</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('riwayatpemesanan') }}">Tiket Saya</a>
                </li>
            </ul>

            <div class="d-flex w-full align-items-center gap-3">
                @guest
                    @if (Route::has('register'))
                    <div class=" button-primary">
                        <a class="text-black" href="{{ url('register') }}">{{ __('Sign Up') }}</a>
                    </div>
                    @endif
                    @if (Route::has('login'))
                        <div class="align-items-center">
                            <a class="px-4 py-2 button-secondary" href="{{ url('login') }}">{{ __('Sign In') }}</a>
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
{{-- navbar end --}}

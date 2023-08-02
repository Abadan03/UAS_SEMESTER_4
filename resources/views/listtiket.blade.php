@extends('layouts.defaults')
@section('content')

    <!-- redirect search -->
    <section id="redirect-search">
        <div class="container">
            {{-- <div class="row mt-5 text-center justify-content-center align-items-center gap-4"> --}}
                {{-- LiveWire Package --}}
                @livewire('tickets', ['results' => $results, 'terminals' => $terminals])
              {{-- <a class="btn btn-primary col-sm-2" href="#" role="button">Edit</a> --}}

            {{-- </div> --}}

        </div>
    </section>


@endsection

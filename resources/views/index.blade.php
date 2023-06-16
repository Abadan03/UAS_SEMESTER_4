@extends('layouts.app')
@section('content')

    <div class="container mt-4 container-index">
        <section class="one d-flex flex-column text-center">
            <div class="">
                <h1 class="border border-black p-2 ">First Page</h1>
            </div>
            <div class="">
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit nesciunt voluptas minima at suscipit, eius facilis. Numquam obcaecati repudiandae doloremque tempore, cupiditate ducimus explicabo ut accusamus, mollitia eum eius exercitationem.</h3>
            </div>
        </section>

        <section class="two">
            <h1>Second Page</h1>
        </section>

        <section class="three">
            <h1>Third Page</h1>
        </section>

        <section class="four">
            <h1>Web Page</h1>
        </section>


    </div>

    @vite('resources/js/app.js')
@endsection

@extends('layouts.app')

@section('content')
    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">{{ $post->title }}</div>

            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">

            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <p>{!! $post->post_content !!}</p>
            </div>

        </div>
    </div>

@endsection

@section('javascripts')

    <script>
        var scroll;
        $(window).scroll(function() {
            scroll = $(window).scrollTop();
            if (scroll > 400) {
                $('nav.navbar').removeClass('bg-transparent');
                $('nav.navbar').addClass('bg-dramatic');
            }
            else {
                $('nav.navbar').addClass('bg-transparent');
                $('nav.navbar').removeClass('bg-dramatic');
            }
        });
    </script>

@endsection
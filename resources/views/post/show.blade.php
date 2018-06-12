@extends('layouts.app')

@section('title')

    {{ $post->title }}

@endsection

@section('content')
    <div class="py-5 position-relative post-show" style="background-image: url(/images/large/{{ $post->image }})">
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
                <h2 class="text-center mb-5">{{ $post->title }}</h2>
                <p>{!! $post->post_content !!}</p>
            </div>

        </div>
    </div>

@endsection
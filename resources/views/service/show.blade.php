@extends('layouts.app')

@section('title')

    {{ $service->name }}

@endsection

@section('content')
    <div class="py-5 position-relative" style="background-image: url(/images/large/{{ $service->image }});background-size: cover;background-position: center center;background-repeat: no-repeat;">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">
                <img src="/images/large/{{ $service->icon }}" class="col-4 col-xl-1 col-md-2 col-lg-3 img-fluid" alt="">
                <div class="col-12 h1 my-5 text-light text-center">{{ $service->name }}</div>

            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">

            <div class="col-12">
                <h2 class="text-center mb-5">{{ $service->name }}</h2>
                <p>{!! $service->service_content !!}</p>
            </div>

        </div>
    </div>

@endsection
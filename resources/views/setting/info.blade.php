@extends('layouts.app')

@section('content')
    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">О нас</div>

            </div>
        </div>
    </div>
    <div class="container py-4">

        <h1 class="text-center">О нас</h1>

        <div class="row justify-content-center mt-5">
            {!! $information !!}
        </div>
    </div>

@endsection
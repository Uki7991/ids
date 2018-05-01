@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            @foreach($posts as $post)

                <div class="col-4 text-dark">
                    <a href="/post/show/{{ $post->id }}" class="text-dark">
                        <div class="card">
                            <img class="card-img-top" src="/upload/4.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->post_desc }}</p>
                            </div>
                            @if(Auth::user() && Auth::user()->admin == 1)

                                <div class="card-body text-center">
                                    <a href="/post/edit/{{ $post->id }}" class="card-link text-warning">Edit</a>
                                    <a href="/post/delete/{{ $post->id }}" class="card-link text-danger">Delete</a>
                                </div>

                            @endif
                        </div>
                    </a>
                </div>

            @endforeach

        </div>
    </div>

@endsection
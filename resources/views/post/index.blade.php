@extends('layouts.app')

@section('content')

    <div class="container">

        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end my-4">
                <a href="/post/create" class="btn btn-outline-success">Создать пост</a>
            </div>

        @endif

        <div class="row">

            @foreach($posts as $post)

                <div class="col-4 text-dark">
                    <div class="card">
                        <a href="/post/show/{{ $post->id }}" class="text-dark">

                            <img class="card-img-top" src="/upload/4.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->post_desc }}</p>
                            </div>
                        </a>
                    @if(Auth::user() && Auth::user()->admin == 1)

                            <div class="card-body text-center">
                                <a href="/post/edit/{{ $post->id }}" class="card-link text-warning">Редактировать</a>
                                <a href="/post/delete/{{ $post->id }}" class="card-link text-danger">Удалить</a>
                            </div>

                        @endif
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
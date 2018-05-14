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

                <div class="col-4 text-dark py-3">
                    <div class="card">
                        <a href="/post/{{ $post->id }}" class="text-dark">

                            <img class="card-img-top" src="/upload/4.jpg" alt="Card image cap">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->post_desc }}</p>
                            </div>
                        </a>
                    @if(Auth::user() && Auth::user()->admin == 1)

                            <div class="card-body text-center">
                                <a href="/post/{{ $post->id }}/edit" class="card-link text-warning">Редактировать</a>
                                <a class="card-link text-danger" href="/post/{{ $post->id }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('post-delete').submit();">Удалить
                                </a>

                                <form id="post-delete" action="/post/{{ $post->id }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                </form>
                            </div>

                        @endif
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
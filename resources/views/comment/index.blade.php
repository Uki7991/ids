@extends('layouts.app')

@section('title', 'Вам будет интересно... | Блог')

@section('content')
    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Blog</div>

            </div>
        </div>
    </div>


    @include('comment.create')


    <div class="container">
        <div class="row">

            @foreach($comments as $comment)

                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $comment->user_info }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $comment->comment }}</p>
                        </div>

                        @if(Auth::user() && Auth::user()->admin == 1)

                            <div class="card-body text-center">
                                <div>
                                    <input type="checkbox" {{ $comment->is_active ? 'checked' : '' }} disabled>
                                    <span>Active</span>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <a href="/comment/{{ $comment->id }}/edit" class="card-link text-warning">Редатировать</a>
                                <a href="{{ route('comment.destroy', $comment) }}" onclick="event.preventDefault();document.getElementById('comment-{{ $comment->id }}').submit();" class="card-link text-danger">Удалить</a>
                                <form method="post" action="{{ route('comment.destroy', $comment) }}" id="comment-{{ $comment->id }}" class="d-none">
                                    @method('DELETE')
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
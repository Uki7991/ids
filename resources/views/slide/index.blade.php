@extends('layouts.app')

@section('title', 'Все услуги | Услуги')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Services</div>

            </div>
        </div>
    </div>

    <div class="container">


        <div class="row my-5">


            @foreach($slides as $slide)

                <div class="col-12 col-sm-6 col-md-3 col-xl-4 my-2">
                    <form action="/slide/{{ $slide->id }}" method="post" id="slide-update-{{ $slide->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <img class="card-img-top" src="/images/small/{{ $slide->image }}" alt="Card image cap">
                            <input type="file" name="image">
                            <div class="card-body">
                                <label for="slide_position">Позиция</label>
                                <input id="slide_position" class="card-text" value="{{ $slide->position }}" name="position">
                            </div>
                        </div>
                    </form>
                    @if(Auth::user() && Auth::user()->admin == 1)

                        <div class="card-body border text-center">
                            <a href="/slide/{{ $slide->id }}" class="card-link text-warning"
                               onclick="event.preventDefault();
                               document.getElementById('slide-update-{{ $slide->id }}').submit();">Редактировать
                            </a>
                            <a class="card-link text-danger" href="/slide/{{ $slide->id }}"
                               onclick="event.preventDefault();
                               document.getElementById('slide-delete-{{ $slide->id }}').submit();">Удалить
                            </a>

                            <form id="slide-delete-{{ $slide->id }}" action="/slide/{{ $slide->id }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    @endif
                </div>

            @endforeach

                <div class="col-12 col-sm-6 col-md-3 col-xl-4 my-2">
                    <form action="/slide" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <input type="file" name="image" class="form-control">
                            <div class="card-body">
                                <label for="slide_position">Позиция</label>
                                <input id="slide_position" class="card-text form-control" name="position">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Добавить</button>
                    </form>
                </div>

        </div>
    </div>

@endsection
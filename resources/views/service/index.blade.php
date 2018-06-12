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

        @if(Auth::user() && Auth::user()->admin == 1)

            <div class="row justify-content-end my-4">
                <a href="{{ route('service.create') }}" class="btn btn-outline-success">Создать услугу</a>
            </div>

        @endif

        <div class="row my-5">


                @foreach($services as $service)

                    <div class="col-12 col-sm-6 col-md-3 col-xl-4 my-2">
                        <div class="card bg-dark text-white">
                            <a href="/service/{{ $service->id }}" class="text-dark">

                                <img class="card-img" src="/images/small/{{ $service->image }}" alt="Card image">
                                <div class="card-img-overlay text-center" style="background-color: #397bb35c">
                                    {{--<i class="fas fa-bolt fa-7x text-light"></i>--}}
                                    <img src="/images/small/{{ $service->icon }}" alt="">
                                    <h4 class="card-title position-absolute bottom text-light">{{ $service->name }}</h4>
                                </div>
                            </a>
                        </div>
                        @if(Auth::user() && Auth::user()->admin == 1)

                            <div class="card-body border text-center">
                                <div>
                                    <input type="checkbox" {{ $service->is_active ? 'checked' : '' }} disabled>
                                    <span>Active</span>
                                </div>
                                <div>
                                    <input type="checkbox" {{ $service->on_main ? 'checked' : '' }} disabled>
                                    <span>On main</span>
                                </div>
                            </div>
                            <div class="card-body border text-center">
                                <a href="/service/{{ $service->id }}/edit" class="card-link text-warning">Редактировать</a>
                                <a class="card-link text-danger" href="/service/{{ $service->id }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('post-delete').submit();">Удалить
                                </a>

                                <form id="post-delete" action="/service/{{ $service->id }}" method="POST" style="display: none;">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </div>

                        @endif
                    </div>

                @endforeach

                {{--@foreach($services as $service)--}}

                    {{--<div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">--}}
                    {{--<div class="card bg-dark text-white">--}}
                        {{--<img class="card-img" src="/images/small/{{ $service->image }}" alt="Card image">--}}
                        {{--<div class="card-img-overlay text-center" style="background-color: #397bb35c">--}}
                            {{--<i class="fas fa-bolt fa-7x text-light"></i>--}}
                            {{--<img src="/images/small/{{ $service->icon }}" alt="">--}}
                            {{--<h4 class="card-title position-absolute bottom">{{ $service->name }}</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--@endforeach--}}


        </div>
    </div>

@endsection
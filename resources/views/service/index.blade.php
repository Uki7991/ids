@extends('layouts.app')

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

        <div class="row">

            <div class="card-columns my-3">

                @foreach($services as $service)

                    <div class="text-dark">
                        <div class="card">
                            <a href="/post/{{ $service->id }}" class="text-dark">

                                <img class="card-img-top" src="/upload/4.jpg" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h3 class="card-title">{{ $service->title }}</h3>
                                    {!! $service->post_desc !!}
                                </div>
                            </a>
                            @if(Auth::user() && Auth::user()->admin == 1)

                                <div class="card-body text-center">
                                    <div>
                                        <input type="checkbox" {{ $service->is_active ? 'checked' : '' }} disabled>
                                        <span>Active</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" {{ $service->on_main ? 'checked' : '' }} disabled>
                                        <span>On main</span>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <a href="/post/{{ $service->id }}/edit" class="card-link text-warning">Редактировать</a>
                                    <a class="card-link text-danger" href="/post/{{ $service->id }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('post-delete').submit();">Удалить
                                    </a>

                                    <form id="post-delete" action="/post/{{ $service->id }}" method="POST" style="display: none;">
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
    </div>

@endsection
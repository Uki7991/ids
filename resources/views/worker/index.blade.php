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
                <a href="{{ route('worker.create') }}" class="btn btn-outline-success">Добавить</a>
            </div>

        @endif

        <div class="row my-5">


            @foreach($workers as $worker)

                <div class="col-12 col-sm-6 col-md-3 col-xl-4 my-2">
                    <div class="card">
                        <img class="card-img-top" src="/images/large/{{ $worker->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $worker->name }}</h5>
                            <p class="card-text">{{ $worker->description }}</p>
                        </div>
                    </div>
                    @if(Auth::user() && Auth::user()->admin == 1)

                        <div class="card-body border text-center">
                            <div>
                                <input type="checkbox" {{ $worker->is_active ? 'checked' : '' }} disabled>
                                <span>Active</span>
                            </div>
                        </div>
                        <div class="card-body border text-center">
                            <a href="/worker/{{ $worker->id }}/edit" class="card-link text-warning">Редактировать</a>
                            <a class="card-link text-danger" href="/worker/{{ $worker->id }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('post-delete').submit();">Удалить
                            </a>

                            <form id="post-delete" action="/worker/{{ $worker->id }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </div>

                    @endif
                </div>

            @endforeach

        </div>
    </div>

@endsection
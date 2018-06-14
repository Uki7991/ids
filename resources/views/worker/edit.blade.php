@extends('layouts.app')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Сохранение сотрудника</div>

            </div>
        </div>
    </div>


    <div class="container py-4">

        <h1 class="text-center">Сохранение сотрудника</h1>

        <div class="row justify-content-center mt-5">

            <form action="/worker/{{ $worker->id }}" method="POST" class="col-10" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" value="{{ $worker->name }}" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="worker_desc">Description</label>
                    <textarea name="description" class="col-12" maxlength="160" id="worker_desc" rows="10">{{ $worker->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="worker_image">Image</label>
                    <input id="worker_image" name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="worker_is-active" class="mr-4">Is active?</label>
                    <input id="worker_is-active" name="is_active" type="checkbox" class="" {{ $worker->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>

        </div>
    </div>

@endsection

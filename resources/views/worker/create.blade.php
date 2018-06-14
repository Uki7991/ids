@extends('layouts.app')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Добавление сотрудника</div>

            </div>
        </div>
    </div>


    <div class="container py-4">

        <h1 class="text-center">Добавление сотрудника</h1>

        <div class="row justify-content-center mt-5">

            <form action="/worker" method="POST" class="col-10" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="worker_desc">Description</label>
                    <textarea name="description" class="col-12" maxlength="160" id="worker_desc" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="worker_image">Image</label>
                    <input id="worker_image" name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="worker_is-active" class="mr-4">Is active?</label>
                    <input id="worker_is-active" name="is_active" type="checkbox" class="">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>

        </div>
    </div>

@endsection

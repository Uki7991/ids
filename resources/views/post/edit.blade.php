@extends('layouts.app')

@section('content')

    <div class="container py-4">
        <h1 class="text-center">Update post {{ $post->id }}</h1>

        <div class="row mt-5 justify-content-center">

            <form action="/post/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input type="text" class="form-control" id="post_title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="post_desc">Description</label>
                    <input type="text" class="form-control" id="post_desc" name="post_desc" value="{{ $post->post_desc }}">
                </div>
                <div class="form-group">
                    <label for="post_image">Image</label>
                    <input id="post_image" name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_content">Content</label>
                    <input id="post_content" name="post_content" type="text" class="form-control" value="{{ $post->post_content }}">
                </div>
                <div class="form-group">
                    <label for="post_is-active">Is active?</label>
                    <input id="post_is-active" name="is_active" type="checkbox" class="form-control" @if($post->is_active) checked @endif>
                </div>
                <div class="form-group">
                    <label for="post_on-main">On main?</label>
                    <input id="post_on-main" name="on_main" type="checkbox" class="form-control" @if($post->on_main) checked @endif>
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>

        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')
    
    <div class="container py-4">

        <h1 class="text-center">Create post</h1>

        <div class="row justify-content-center mt-5">

            <form action="/post/store" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input type="text" class="form-control" id="post_title" name="title">
                </div>
                <div class="form-group">
                    <label for="post_desc">Description</label>
                    <input type="text" class="form-control" id="post_desc" name="post_desc">
                </div>
                <div class="form-group">
                    <label for="post_image">Image</label>
                    <input id="post_image" name="image" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_content">Content</label>
                    <input id="post_content" name="post_content" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_is-active">Is active?</label>
                    <input id="post_is-active" name="is_active" type="checkbox" class="form-control">
                </div>
                <div class="form-group">
                    <label for="post_on-main">On main?</label>
                    <input id="post_on-main" name="on_main" type="checkbox" class="form-control"
                        @if($countOnMain == 2) disabled @endif
                    >
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
            
        </div>
    </div>
    
@endsection()
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->post_desc }}</p>
                <p>{{ $post->post_content }}</p>
            </div>

        </div>
    </div>

@endsection
@extends('layouts.app')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Blog</div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-5 justify-content-center">

            <form method="POST" class="col-10" action="{{ route('comment.update') }}">
                @csrf

                <div class="form-group row">
                    <label for="user_info" class="col-sm-4 col-form-label text-md-right">Фамилия Имя</label>

                    <div class="col-md-6">
                        <input id="user_info" type="text" class="form-control" disabled name="user_info" value="{{ old('user_info') }}" required>

                        @if ($errors->has('user_info'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_info') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="comment" class="col-md-4 col-form-label text-md-right">Ваш комментарий</label>

                    <div class="col-md-6">
                        <textarea id="comment" class="form-control" disabled name="comment" required>{{ $comment->comment }}</textarea>

                        @if ($errors->has('comment'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('comment') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="is-active" class="col-md-4 col-form-label text-md-right">Активный</label>

                    <div class="col-md-6">
                        <input type="checkbox" name="is_active" id="is-active">

                        @if ($errors->has('is_active'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('is_active') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Оставить комментарий
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
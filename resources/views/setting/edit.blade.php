@extends('layouts.app')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Общие настройки</div>

            </div>
        </div>
    </div>


    <div class="container py-4">

        <h1 class="text-center">Общие настройки</h1>

        <div class="row justify-content-center mt-5">

            <form action="/setting/{{ $setting->id }}" method="POST" class="col-10" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" value="{{ $setting->name }}" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="setting_logo">Лого</label>
                    <input id="setting_logo" name="logo" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_phone1">Номер телефона 1</label>
                    <input type="text" id="setting_phone1" value="{{ $setting->phone1 }}" name="phone1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_phone2">Номер телефона 2</label>
                    <input type="text" id="setting_phone2" value="{{ $setting->phone2 }}" name="phone2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_phone3">Номер телефона 3</label>
                    <input type="text" id="setting_phone3" value="{{ $setting->phone3 }}" name="phone3" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_phone4">Номер телефона 4</label>
                    <input type="text" id="setting_phone4" value="{{ $setting->phone4 }}" name="phone4" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_email">E-mail</label>
                    <input type="text" id="setting_email" value="{{ $setting->email }}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_instagram">Instagram</label>
                    <input type="text" id="setting_instagram" value="{{ $setting->instagram }}" name="instagram" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_facebook">Facebook</label>
                    <input type="text" id="setting_facebook" value="{{ $setting->facebook }}" name="facebook" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_telegram">Telegram</label>
                    <input type="text" id="setting_telegram" value="{{ $setting->telegram }}" name="telegram" class="form-control">
                </div>
                <div class="form-group">
                    <label for="setting_whatsapp">Whatsapp</label>
                    <input type="text" id="setting_whatsapp" value="{{ $setting->whatsapp }}" name="whatsapp" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>

        </div>
    </div>

@endsection

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
                <div class="form-group">
                    <label for="setting_info">Информация "о нас"</label>
                    <input id="setting_info" value='{!! $setting->information !!}' name="information" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>

        </div>
    </div>

@endsection

@section('javascripts')

    <script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('js/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
    {{--<script>--}}
    {{--tinymce.init({--}}
    {{--selector:'#post_desc',--}}
    {{--height: 300--}}
    {{--});--}}
    {{--</script>--}}
    <script>
        tinymce.init({
            selector:'#setting_info',
            height: 500,
            plugins: [
                "advlist autolink lists link image imagetools charmap print preview anchor paste",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            image_title: true,
            image_class_list: [
                {title: 'image-fluid', value: 'img-fluid'}
            ],
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            paste_data_images: true,
            // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url: '/upload-image-tiny',
            // here we add custom filepicker only to Image dialog
            relative_urls: false,
            remove_script_host: false,
            // and here's our custom image picker
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.setAttribute('name', 'image');

                // Note: In modern browsers input[type="file"] is functional without
                // even adding it to the DOM, but that might not be the case in some older
                // or quirky browsers like IE, so you might want to add it to the DOM
                // just in case, and visually hide it. And do not forget do remove it
                // once you do not need it anymore.

                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        // Note: Now we need to register the blob in TinyMCEs image blob
                        // registry. In the next release this part hopefully won't be
                        // necessary, as we are looking to handle it internally.
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // call the callback and populate the Title field with the file name
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }
        });
    </script>

@endsection
@extends('layouts.app')

@section('content')

    <div class="py-5 position-relative post-show">
        <div class="backdrop-post"></div>
        <div class="container">
            <div class="row py-5 align-items-end justify-content-center">

                <div class="h1 my-5 text-light text-center">Update post {{ $post->id }}</div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <h1 class="text-center">Update post {{ $post->id }}</h1>

        <div class="row mt-5 justify-content-center">

            <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
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
                    <input id="post_on-main" name="on_main" type="checkbox" class="form-control"
                        @if($post->on_main) checked @endif
                        @if(!($countOnMain < 4 || $post->on_main)) disabled @endif
                    >
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>

        </div>
    </div>

@endsection

@section('javascripts')

    <script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <script src="{{ asset('js/tinymce/js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector:'#post_desc',
            height: 300
        });
    </script>
    <script>
        tinymce.init({
            selector:'#post_content',
            height: 800,
            plugins: [
                "advlist autolink lists link image imagetools charmap print preview anchor paste",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            image_class_list: [
                {title: 'image-fluid', value: 'img-fluid'}
            ],
            image_title: true,
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            paste_data_images: true,
            // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
            images_upload_url:'/upload-image-tiny',
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

    <script>
        var scroll;
        $(window).scroll(function() {
            scroll = $(window).scrollTop();
            if (scroll > 400) {
                $('nav.navbar').removeClass('bg-transparent');
                $('nav.navbar').addClass('bg-dramatic');
            }
            else {
                $('nav.navbar').addClass('bg-transparent');
                $('nav.navbar').removeClass('bg-dramatic');
            }
        });
    </script>

@endsection
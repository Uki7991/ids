<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="sticky-top header">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ml-5 mx-auto text-center text-light" href="#">Implant Dental Service</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#uslugi">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#blog">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Контакты</a>
                    </li>
                </ul>
                <ul class="nav flex-column mr-0 mr-lg-5">
                    <li class="nav-item row align-items-center justify-content-center small">
                        <a class="nav-link text-light" href="mailto:ids.com@gmail.com"><u>ids.com@gmail.com</u></a>
                    </li>
                    <li class="nav-item row align-items-center justify-content-center small">
                        <a class="nav-link text-light" href="tel: +996 (700) 700 700"><u>+996 (700) 700 - 700</u></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark">

        <div class="container">
            <div class="row py-5 justify-content-between justify-content-center text-center">
                <div class="col-12 col-md-auto text-light h4">Implant Dental Service</div>
                <div class="col-12 col-md-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link text-muted small p-1" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted small p-1" href="#">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted small p-1" href="#uslugi">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted small p-1" href="#blog">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted small p-1" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-auto mt-4 mt-md-0">
                    <div class="row justify-content-center">
                        <h3 class="text-light">Контакты</h3>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" target="_blank" class="text-light mr-3"><i class="fab fa-lg fa-facebook"></i></a>
                        <a href="" target="_blank" class="text-light mr-3"><i class="fab fa-lg fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="row py-3 justify-content-center small text-muted">
                <a href="http://mount.kg" target="_blank" class="text-muted">Made with&nbsp;<span class="text-danger">&hearts;</span> by&nbsp;Mount</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Услуга</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
    @yield('javascripts')

</body>
</html>

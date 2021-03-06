<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Implant Dental Service - @yield('title')</title>
    <meta name="keywords" content="стоматология бишкек ортодонтия детская терапия стоматолог зубы врачи лечение качество отбеливание зубов профилактика в улыбка зубной врач">
    <meta name="description" content="Стоматологическая клиника Implant Dental Service. Наш основной принцип - качество. Здесь работают профессионалы высшего класса, и Вы это почувствуете не только по узкопрофильному &quot;зубному&quot; подходу, но и по психологическому подходу к каждому пациенту. Мы не забываем, что каждый человек - индивидуальность, и наши врачи постоянно помнят об этом.">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500|Open+Sans+Condensed:300&amp;subset=cyrillic" rel="stylesheet">

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
        <nav class="navbar navbar-expand-lg navbar-light bg-dramatic" style="font-size: 1.2rem;">
            <div class="container">
                <button class="navbar-toggler text-light border-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
                <a class="navbar-brand ml-5 mx-auto text-center text-light" href="/">
                    @if($setting->logo)
                        <img src="/img/{{ $setting->logo }}" alt="">
                    @else
                        {{ $setting->name }}
                    @endif
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('info') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/#uslugi">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ Request::is('/') ? '/#blog' : '/post' }}">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#contacts">Контакты</a>
                        </li>
                    </ul>
                    @if(Auth::user() && Auth::user()->admin)

                        <div class="dropdown mr-auto">
                            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="/slide">Слайдер</a>
                                <a class="dropdown-item" href="/service">Услуги</a>
                                <a class="dropdown-item" href="/post">Блог</a>
                                <a class="dropdown-item" href="/comment">Комментарии</a>
                                <a class="dropdown-item" href="/worker">Сотрудники</a>
                                <a class="dropdown-item" href="/setting/{{ $setting->id }}/edit">Настройки</a>

                                <div class="dropdown-divider"></div>

                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout').submit();">Logout</a>
                                <form action="{{ route('logout') }}" id="logout" method="POST" style="display:none;">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    @endif
                    <ul class="nav flex-column mr-0 mr-lg-5">
                        @if($setting->phone1)
                            <li class="nav-item row align-items-center justify-content-center">
                                <a class="nav-link text-light" href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                            </li>
                        @endif
                        @if($setting->phone2)
                            <li class="nav-item row align-items-center justify-content-center">
                                <a class="nav-link text-light" href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <main>
        @yield('content')
    </main>

    <footer class="bg-dramatic">

        <div class="container">
            <div class="row py-5 justify-content-between justify-content-center text-center">
                <div class="col-12 col-md-auto text-light h4">
                    @if($setting->logo)
                        <img src="/img/{{ $setting->logo }}" alt="">
                    @else
                        {{ $setting->name }}
                    @endif
                </div>
                <div class="col-12 col-md-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link text-light p-1" href="/">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light p-1" href="{{ route('info') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light p-1" href="#uslugi">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light p-1" href="{{ Request::is('/') ? '/#blog' : '/post' }}">Блог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light p-1" href="#contacts">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div id="contacts" class="col-12 col-md-auto mt-4 mt-md-0">
                    <div class="row justify-content-center">
                        <h3 class="text-light">Контакты</h3>
                    </div>
                    @if($setting->facebook)
                        <div class="row justify-content-center">
                            <a href="{{ $setting->facebook }}" target="_blank" class="text-light mr-3 p-2 text-center contacts-link"><i class="fab fa-lg fa-facebook"></i> @ids_clinic</a>
                        </div>
                    @endif
                    @if($setting->instagram)
                        <div class="row justify-content-center">
                            <a href="{{ $setting->instagram }}" target="_blank" class="text-light mr-3 p-2 text-center contacts-link"><i class="fab fa-lg fa-instagram"></i> @ids_clinic</a>
                        </div>
                    @endif
                    @if($setting->telegram)
                        <div class="row justify-content-center">
                            <a href="{{ $setting->telegram }}" target="_blank" class="text-light mr-3 p-2 text-center contacts-link"><i class="fab fa-lg fa-telegram"></i> @ids_clinic</a>
                        </div>
                    @endif
                    @if($setting->whatsapp)
                        <div class="row justify-content-center">
                            <a href="{{ $setting->whatsapp }}" target="_blank" class="text-light mr-3 p-2 text-center contacts-link"><i class="fab fa-lg fa-whatsapp"></i> @ids_clinic</a>
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <ul class="nav flex-column">
                            @if($setting->email)
                                <li class="nav-item align-items-center justify-content-center">
                                    <a class="nav-link text-light" href="mailto:{{ $setting->email }}">E-mail: {{ $setting->email }}</a>
                                </li>
                            @endif
                            <div class="d-flex justify-content-center">
                                @if($setting->phone1)
                                    <li class="nav-item mx-1 row align-items-center justify-content-center">
                                        <a class="nav-link text-light" href="tel: {{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                                    </li>
                                @endif
                                @if($setting->phone2)
                                    <li class="nav-item mx-1 row align-items-center justify-content-center">
                                        <a class="nav-link text-light" href="tel: {{ $setting->phone2 }}">{{ $setting->phone2 }}</a>
                                    </li>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center">
                                @if($setting->phone3)
                                    <li class="nav-item mx-1 row align-items-center justify-content-center">
                                        <a class="nav-link text-light" href="tel: {{ $setting->phone3 }}">{{ $setting->phone3 }}</a>
                                    </li>
                                @endif
                                @if($setting->phone4)
                                    <li class="nav-item mx-1 row align-items-center justify-content-center">
                                        <a class="nav-link text-light" href="tel: {{ $setting->phone4 }}">{{ $setting->phone4 }}</a>
                                    </li>
                                @endif
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            {{--<div class="row justify-content-center small text-muted">--}}
                {{--<a href="http://mount.kg" target="_blank" class="text-danger p-2 bg-light">Made with&nbsp;<span class="text-danger">&hearts;</span> by&nbsp;Mount</a>--}}
            {{--</div>--}}
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
    <script>
        var scroll;
        if ($(window).width() > 1000) {
            $('nav.navbar').css('font-size', '1.2rem');
            $(window).scroll(function() {
                scroll = $(window).scrollTop();
                if (scroll > 200) {
                    $('nav.navbar').css('font-size', '.9rem');
                }
                else {
                    $('nav.navbar').css('font-size', '1.2rem');
                }
            });
        }
    </script>
    @yield('javascripts')

</body>
</html>

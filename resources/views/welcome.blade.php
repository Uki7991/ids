@extends('layouts.app')

@section('title', 'Main')

@section('content')

    <section>
        <div class="jumbotron d-none d-lg-block jumbotron-fluid m-0 w-35 w-lg-75 w-xl-100 jumbotron-new bg-primary-transparent-20 border border-light text-light">
            <div class="backdrop-card"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <p class="lead text-uppercase text-center">Красивая улыбка – визитная карточка успешного и уверенного в себе человека!</p>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-100">
                <div class="carousel-item active">
                    <img src="img/DSC_1800-min-min.jpg" class="w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/DSC_1757-min-min.jpg" class="w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="uslugi" class="container mb-4">
        <div class="row justify-content-center py-5">
            <h2 class="h1">Услуги</h2>
        </div>
        <div class="row">

                @foreach($services as $service)

                    <div class="col-12 col-sm-6 col-md-3 col-xl-4 my-2">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="/images/large/{{ $service->image }}" alt="Card image">
                            <div class="card-img-overlay text-center" style="background-color: #397bb35c">
                                {{--<i class="fas fa-bolt fa-7x text-light"></i>--}}
                                <img src="/images/small/{{ $service->icon }}" class="img-fluid" alt="">
                                <h4 class="card-title position-absolute bottom">{{ $service->name }}</h4>
                            </div>
                        </div>
                    </div>

                @endforeach

        </div>

        <div class="row justify-content-center mt-5 mb-3">
            <a href="{{ route('service.index') }}" class="btn btn-primary rounded-bottom-right rounded-top-left border-light border-5">Посмотреть еще услуги...</a>
        </div>
    </section>

    <section>
        <div class="card-director">
            <div class="container py-5">
                <div class="row mb-4 justify-content-center">
                    <h2 class="text-center h1 col-12 mb-0">Мурзалиев Амантур Джолдошбекович</h2>
                    <span class="text-dramatic">Ведущий специалист по имплантологии в Кыргызстане,
                            Генеральный директор стоматологической клиники «IDS», Кандидат медицинских наук</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12 pl-0">
                        <img class="img-fluid mx-auto" src="img/DSC_1846-min.jpg" alt="Card image cap">
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-6 mb-3 text-center h-100">
                                <div class="border rounded-bottom-right rounded-top-left col-12 height-200 row align-items-center border-info border-5 py-5">
                                    <p class="text-primary col-12">
                                        <span class="h1">32</span>
                                        <span class="text-uppercase"> года</span>
                                    </p>
                                    <p class="h4 col-12">Стаж работы</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mb-3 text-center h-100">
                                <div class="border rounded-bottom-right rounded-top-left col-12 height-200 row align-items-center border-info border-5 py-5">
                                    <p class="text-primary col-12">
                                        <span class="h1">20</span>
                                        <span class="text-uppercase"> лет</span>
                                    </p>
                                    <p class="h4 col-12">Дентальной имплантацией</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mb-3 text-center h-100">
                                <div class="border rounded-bottom-right rounded-top-left col-12 height-200 row align-items-center border-info border-5 py-5">
                                    <p class="text-primary col-12">
                                        <span class="h1">20</span>
                                        <span class="text-uppercase"></span>
                                    </p>
                                    <p class="h4 col-12">Научных работ</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mb-3 text-center h-100">
                                <div class="border rounded-bottom-right rounded-top-left col-12 height-200 row align-items-center border-info border-5 py-5">
                                    <p class="text-primary col-12">
                                        <span class="h1">15</span>
                                        <span class="text-uppercase"></span>
                                    </p>
                                    <p class="h4 col-12">Патентов и предложений</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mb-3 text-center h-100">
                                <div class="border rounded-bottom-right rounded-top-left col-12 height-200 row align-items-center border-info border-5 py-5">
                                    <p class="text-primary col-12">
                                        <span class="h1">99,9</span>
                                        <span class="text-uppercase">%</span>
                                    </p>
                                    <p class="h4 col-12">Успешных операций</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="py-5 d-flex align-items-center" style="background-image: url('img/1-min.jpg'); background-attachment: fixed; z-index: 2;">
        <div class="container my-5">
            <div class="row justify-content-center bg-dramatic py-4">
                <h2 class="text-center h1 text-light">Чем мы отличаемся от всех?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 min-benefit-height first-color-sanacia">
                            <p class="h2 mt-3 text-uppercase text-light">специалисты</p>
                            <p class="text-light">В клинике работают высококвалифицированные специалисты, имеющие международные
                                сертификаты. Команда стоматологов вкладывает в свое искусство, помимо таланта, душу и сердце.
                                Это - профессионалы, постоянно повышающие свою квалификацию.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height second-color-sanacia">
                            <p class="h2 mt-3 text-uppercase text-light">Безопасность</p>
                            <p class="text-light">Безопасность: строжайшие регламенты стерилизации инструментов.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height third-color-sanacia">
                            <p class="h2 mt-3 text-uppercase text-light">Качество</p>
                            <p class="text-light">Качество и безопасность стоматологической помощи на международными уровне.
                                Стоматологическая клиника "IDS" работает по программе "Анти-СПИД" и "Анти-ГЕПАТИТ".</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height forth-color-sanacia">
                            <p class="h2 mt-3 text-uppercase text-light">Философия</p>
                            <p class="text-light">Философия комплексного лечения позволяет добиваться долгосрочных результатов на
                                высоком профессиональном уровне. У нас представлены все стоматологические дисциплины: врачи общей
                                практики, терапевты, гигиенисты, пародонтологи, хирурги, имплантологи, ортопеды, ортодонты.
                                В лечении пациента принимает участие не только стоматологическое отделение, а и вся многопрофильная
                                клиника с прекрасной диагностической базой.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-none py-5 d-lg-block" id="cirle_benefit-section" style="background-image: url('img/1-min.jpg'); background-attachment: fixed; z-index: 2;">
        <div class="backdrop"></div>
        <div style="height: 250px;">
            <div class="container text-light h-100">
                <div class="row h-100">
                    <div class="col-3">
                        <div class="circle-benefits text-center">
                            <div>
                                <p id="el-1" class="text-light col-12 h1" style="font-size: 2em;">0</p>
                                <p class="col-auto">Успешных операций</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="circle-benefits text-center">
                            <div>
                                <p id="el-2" class="text-light col-12 h1" style="font-size: 2em;">0</p>
                                <p class="col-auto">Специалистов</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="circle-benefits text-center">
                            <div>
                                <p id="el-3" class="text-light col-12 h1" style="font-size: 2em;">0</p>
                                <p class="col-auto">Партнеров и Спонсоров</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="circle-benefits text-center">
                            <div>
                                <p id="el-4" class="text-light col-12 h1" style="font-size: 2em;">0</p>
                                <p class="col-auto">Специалистов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="card-director">
            <div class="container py-5">
                <div class="row justify-content-center mb-3">
                    <h2 class="h1">Отзывы</h2>
                </div>
                <div class="row">


                    <div class="owl-carousel owl-theme owl-1 owl-nav-outer owl-dot-round">

                        @foreach($comments as $comment)

                            <div class="card bg-light-gray-blue">
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="mb-0 small text-dark comment-comment">{{ $comment->comment }}</p>
                                    </blockquote>
                                </div>
                                <div class="card-footer">
                                    <div class="blockquote-footer text-center text-dark">{{ $comment->user_info }}</div>
                                </div>
                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="row justify-content-center mt-3">
                    <a href="/comment" class="btn btn-primary rounded-bottom-right rounded-top-left border-light border-5">Еще отзывы</a>
                </div>
            </div>
        </div>
        @include('comment.create')
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <h2 class="h1">Наша команда</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme owl-3">

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846-min.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="container pb-5">
        <div class="row justify-content-center py-5">
            <h2 class="h1" id="blog-title">Вам будет интересно...</h2>
        </div>
        <div class="row">
            @foreach($posts as $post)

                <div class="col-12 mb-3 mb-md-0 col-md-6">
                    <a href="/post/{{ $post->id }}" class="card-spec" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(img/4-min.jpg)">
                                <div class="inner">
                                    <p>Forbes</p>
                                    <span>{{ $post->title }}</span>
                                </div>
                            </div>
                            <div class="back">
                                <div class="inner">
                                    <p class="text-light">{!! $post->post_desc !!}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
        <div class="row justify-content-center mt-5 mb-3">
            <a href="{{ route('post.index') }}" class="btn btn-primary rounded-bottom-right rounded-top-left border-light border-5">Посмотреть еще новости...</a>
        </div>
    </section>

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2068.547948738345!2d74.57941399869907!3d42.84395032379986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec9c4beaa090b%3A0x676d0b00ddb74fbe!2zMTk0INGD0LsuINCQ0YXRg9C90LHQsNC10LLQsCwg0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1523212263981" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

@endsection

@section('javascripts')

    <script src="{{ asset('js/plugins/plugin.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="{{ asset('js/plugins/smoothscroll.js') }}"></script>
    <script>
        var owl1 = $('.owl-1');
        owl1.owlCarousel({
            items:3,
            loop:true,
            autoplay:true,
            autoplayTimeout:10000,
            autoplayHoverPause:true,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: false
                },
                600:{
                    items:2,
                    nav:false,
                    dots: true
                },
                1000:{
                    items:3,
                    nav:false,
                    loop:true,
                    dots:true
                },
                1300:{
                    items:4,
                    nav:true,
                    loop:true,
                    dots:false
                }
            }
        });
        var owl2 = $('.owl-2');
        owl2.owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: false
                },
                600:{
                    items:2,
                    nav:false,
                    dots: true
                },
                1000:{
                    items:3,
                    nav:false,
                    loop:true,
                    dots:true
                },
                1300:{
                    items:4,
                    nav:true,
                    loop:true,
                    dots:false
                }
            }
        });
        var owl3 = $('.owl-3');
        owl3.owlCarousel({
            items:4,
            loop:true,
            nav:true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            margin:10,
            autoplay:true,
            autoplayTimeout:10000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false,
                    dots: false
                },
                600:{
                    items:2,
                    nav:false,
                    dots: true
                },
                1000:{
                    items:3,
                    nav:false,
                    loop:true,
                    dots:true
                },
                1300:{
                    items:4,
                    nav:true,
                    loop:true,
                    dots:false
                }
            }
        });
    </script>

@endsection
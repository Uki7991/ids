@extends('layouts.app')

@section('title', 'Main')

@section('content')

    <section>
        <div class="jumbotron d-none d-lg-block jumbotron-fluid m-0 w-35 w-lg-75 w-xl-100 jumbotron-new bg-primary-transparent-20 border border-light text-light">
            <div class="backdrop-card"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <h1 class="display-4 text-center">Implant Dental Service</h1>
                <p class="lead">ВЫ ЗНАЕТЕ, ЧТО ЛЕЧЕНИЕ ЗУБОВ МОЖЕТ ПРОХОДИТЬ БЕЗ БОЛИ И ДИСКОМФОРТА?</p>
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
                    <img src="img/DSC_1800-min.jpg" class="w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/DSC_1757-min.jpg" class="w-100" alt="...">
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

            <div class="card-columns">

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

                <div class="card bg-dark text-white" style="cursor: pointer;" data-toggle="modal" data-target="#exampleModalCenter">
                    <img class="card-img" src="img/4.jpg" alt="Card image">
                    <div class="card-img-overlay text-center" style="background-color: #397bb330">
                        <i class="fas fa-bolt fa-7x text-light"></i>
                        <h4 class="card-title position-absolute bottom">Card title</h4>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <section id="benefits" class="py-5 d-flex align-items-center" style="background-image: url('img/1.jpg'); background-attachment: fixed; z-index: 2;">
        <div class="container my-5">
            <div class="row justify-content-center bg-dramatic py-4">
                <h2 class="text-center h1 text-light">Чем мы отличаемся от других?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 min-benefit-height" style="background-color: #28ABCA;">
                            <p class="h1 text-light text-right">01</p>
                            <p class="h2 text-uppercase text-light">специалисты</p>
                            <p class="text-light">В клинике работают высококвалифицированные специалисты, имеющие международные
                                сертификаты. Команда стоматологов вкладывает в свое искусство, помимо таланта, душу и сердце.
                                Это - профессионалы, постоянно повышающие свою квалификацию.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height" style="background-color: #0698BE;">
                            <p class="h1 text-light text-right">02</p>
                            <p class="h2 text-uppercase text-light">Безопасность</p>
                            <p class="text-light">Безопасность: строжайшие регламенты стерилизации инструментов.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height" style="background-color: #0083A6;">
                            <p class="h1 text-light text-right">03</p>
                            <p class="h2 text-uppercase text-light">Философия</p>
                            <p class="text-light">Философия комплексного лечения позволяет добиваться долгосрочных результатов на
                                высоком профессиональном уровне. У нас представлены все стоматологические дисциплины: врачи общей
                                практики, терапевты, гигиенисты, пародонтологи, хирурги, имплантологи, ортопеды, ортодонты.
                                В лечении пациента принимает участие не только стоматологическое отделение, а и вся многопрофильная
                                клиника с прекрасной диагностической базой.</p>
                        </div>
                        <div class="col-12 col-md-6 p-3 min-benefit-height" style="background-color: #00759A;">
                            <p class="h1 text-light text-right">04</p>
                            <p class="h2 text-uppercase text-light">Качество</p>
                            <p class="text-light">Качество и безопасность стоматологической помощи на международными уровне.
                                Стоматологическая клиника "IDS" работает по программе "Анти-СПИД" и "Анти-ГЕПАТИТ".</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="container pb-5">
        <div class="row justify-content-center py-5">
            <h2 class="h1">Блог</h2>
        </div>
        <div class="row">
            @foreach($posts as $post)

                <div class="col-12 mb-3 mb-md-0 col-md-6">
                    <a href="/post/{{ $post->id }}" class="card-spec" ontouchstart="this.classList.toggle('hover');">
                        <div class="container">
                            <div class="front" style="background-image: url(img/4.jpg)">
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
            <a href="{{ route('post.index') }}" class="btn btn-primary">Посмотреть еще новости...</a>
        </div>
    </section>

    <section class="d-none d-xl-block position-relative" style="background-image: url('img/1.jpg'); background-attachment: fixed; z-index: 2;">
        <div style="content: ' '; width: 100%; height: 300px; position: absolute; left: 0px; background-color: #00000085;"></div>
        <div class="container text-light">
            <div class="row">
                <div class="col-3">
                    <div class="my-progress-bar1"><span id="el"><p id="el-1" class="text-light">0</p> Успешных операций</span></div>
                </div>
                <div class="col-3">
                    <div class="my-progress-bar2"><span id="el"><p id="el-2" class="text-light">0</p> Специалистов</span></div>
                </div>
                <div class="col-3">
                    <div class="my-progress-bar3"><span id="el"><p id="el-3" class="text-light">0</p> Партнеров и Спонсоров</span></div>
                </div>
                <div class="col-3">
                    <div class="my-progress-bar4"><span id="el"><p id="el-4" class="text-light">0</p> Специалистов</span></div>
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
                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Последние два года пользуюсь услугами данной клиники, всем довольна, в кабинетах всегда чисто, профессионально лечат зубики. Что самое главное — приемелмая цена.</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Айдай</div>
                            </div>
                        </div>


                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Я обратился в клинику IDS к доктору Мурзалиеву по поводу имплантации. Поменял 2 моста, поставил 2 имплантата. Всё сделали качественно и безболезненно. Рекомендую обращаться. Дмитрий.</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Дмитрий</div>
                            </div>
                        </div>


                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Доктора Амантура Мурзалиева, я знаю очень давно, около30 лет, уже почти родственники</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Канат</div>
                            </div>

                        </div>

                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Последние два года пользуюсь услугами данной клиники, всем довольна, в кабинетах всегда чисто, профессионально лечат зубики. Что самое главное — приемелмая цена.</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Айдай</div>
                            </div>
                        </div>


                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Я обратился в клинику IDS к доктору Мурзалиеву по поводу имплантации. Поменял 2 моста, поставил 2 имплантата. Всё сделали качественно и безболезненно. Рекомендую обращаться. Дмитрий.</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Дмитрий</div>
                            </div>
                        </div>


                        <div class="card bg-light-gray-blue">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0 small text-dark">Доктора Амантура Мурзалиева, я знаю очень давно, около30 лет, уже почти родственники</p>
                                </blockquote>
                            </div>
                            <div class="card-footer">
                                <div class="blockquote-footer text-center text-dark">Канат</div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row justify-content-center mt-3">
                    <a href="/comment" class="btn btn-primary">Еще отзывы</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row justify-content-center mb-4">
                <h2 class="h1">Наша команда</h2>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme owl-3">

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="img/DSC_1846.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Мурзалиев Амантур Джолдошбекович</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="card-director">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4 col-12 pl-0">
                        <img class="img-fluid mx-auto" src="img/DSC_1846.jpg" alt="Card image cap">
                    </div>
                    <div class="col-lg-8 col-12 py-3">
                        <h3 class="text-center mb-3">Мурзалиев Амантур Джолдошбекович</h3>
                        <span class="text-dark"> - ведущий специалист по имплантологии в Кыргызстане.</span>
                        <div class="mt-5">
                            <p class="">
                                Генеральный директор стоматологической клиники «IDS»
                            </p>
                            <p class="">
                                Кандидат медицинских наук
                            </p>
                            <p class="">
                                Доцент кафедры стоматологии и челюстно-лицевой хирургии КГМИП  и ПК
                            </p>
                            <p class="">
                                Врач-стоматолог, ортопед-имплантолог, хирург-имплантолог
                            </p>
                            <p class="">
                                Стаж работы 31 год
                            </p>
                            <p class="">
                                Дентальной имплантацией занимается 20 лет
                            </p>
                            <p class="">
                                Было написано – 20 научных работ, рационализаторских предложений – 14 и 1 патент на щипцы
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
                    nav:true,
                    dots: true
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
                    nav:true,
                    dots: true
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
                    nav:true,
                    dots: true
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
@extends('layouts.template')

@section('title')
    CAC
@endsection
@section('header')
    @include('components.header')
@endsection


@section('content')
    <div class="presentation_vedio" id="home">
        <div class="cover">
            <h1 style="color: white;">WATCH <i class="bi bi-play-circle"></i> TRAILER</h1>
        </div>
        <video autoplay muted loop>
            <source src="{{ asset('public/imgs/video.mp4') }}" type="video/mp4">
        </video>

    </div>

    <div class="definition">
        <div class="container">
            <div class="text">
                <h1 class="title">
                    نبذه عن المنصه
                </h1>
                <p class="text">
                    هذه المنصه عباره منصه تحتوي على جميع الافلام والشخصيات والفنانين والفنانات الجزائريين الذي لهم دور كبير
                    في السينما حيث تعتبر أول منصه رقميه من هذا النوع .
                    وايضا مختلف الاخبار السينمائيه
                    حيث ستسهل عمليه الوصول إلى المحتوى
                </p>
                <div class="decoration"></div>
            </div>
            <div class="imgs">
                <img src="{{ asset('public/imgs/film1.png') }}" alt="film1">
                <img src="{{ asset('public/imgs/film2.png') }}" alt="film2">
                <img src="{{ asset('public/imgs/film3.jpg') }}" alt="film3">
            </div>

        </div>
    </div>


    <div class="films" id="films">
        <div class="cover">
            
        </div>
        <div class="container">
            <h1 class="title">
                ارشيف سينما الجزائر
            </h1>
            <div class="decoration"></div>
            <div class="filmsConatiner">
                @foreach ($films as $film)
                <div class="film">
                    <img src="{{ asset('public/imgs/films/'.$film->picture) }}" alt="">
                    <div class="info">
                        <h2>
                            {{$film->title}}
                        </h2>
                        <div class="decoration">

                        </div>
                    </div>
                </div>
                @endforeach



            </div>
            <div class="btn">
                <a href="">
                    <button>
                        مشاهدة المزيد <i class="bi bi-arrow-left"></i>
                    </button>
                </a>
            </div>

        </div>
    </div>

    <div class="actors" id="actors">
        <div class="container">
            <h1 class="title">
                سينمائيو الجزائر
            </h1>
            <div class="decoration"></div>
            <div class="actorsConatiner">
                @foreach ($actors as $actor)


                <div class="actor" onmouseover="displayimg(this)" onmouseout="hideimg(this)">
                    <img src="{{ asset('public/imgs/actors/'.$actor->picture) }}" alt="">
                    <div class="desc">
                        <h1>{{$actor->name}}</h1>
                        <div class="decoration"></div>
                        <p>
                            {{$actor->desc}}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="btn">
                <a href="">
                    <button>
                        مشاهدة المزيد <i class="bi bi-arrow-left"></i>
                    </button>
                </a>
            </div>

        </div>
    </div>


    <div class="news" id="news">
        <div class="container">
            <h1 class="title">
                آخر المستجدات
            </h1>
            <div class="decoration"></div>

            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film2.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film3.jpg') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film1.png') }}" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('public/imgs/film3.jpg') }}" alt=""></div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev prev"> <i class="bi bi-arrow-right"></i> </div>
                <div class="swiper-button-next next"> <i class="bi bi-arrow-left"></i></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('components.footer')
@endsection

@section('script')
    <script>

        const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 10,
            slidesPerView: 3,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                clickable: true
            },
        });
    </script>
@endsection

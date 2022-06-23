@extends('layouts.app')

@section('title', 'Конкурс. Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/competition/index.css') }}">
@endsection

@section('body-class', 'body--white')

@section('content')
<section class="section section-content section-newyear new-main">
    <div class="container">
        <div class="slide-wrapper">
            <div class="slide-inner wow fadeIn">
                <div class="slide slide-new-year">
                    <div class="slide-content">
                        <h4 class="slide__title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            <span class="font-weight-700">Проекты принимаются
                                по&nbsp;направлениям</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('block.step')

@include('block.incards')

@include('block.nominations')

@include('block.service')

<section class="section section-content section-history">
    <div class="container" id="graphic">
        <div class="section-history__inner">
            <div class="border-top-black"></div>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">График проведения Премии
            </h2>
            <p class="section-subtitle mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                Листайте таймлайн влево, чтобы узнать
                о важных датах премии
            </p>
        </div>
    </div>
    <div class="section-history__content section-history__content-slider">
        <div cursor-status class="swiper-container swiper-history wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="swiper-wrapper" data-white>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">30.09</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Официальный старт премии</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">30.09-27.10</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Формирование лонг-листа номинантов (прием заявок)</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">28.10-05.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Формирование шорт-листа номинантов</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">05.12 - 16.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Работа большого жюри</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">18.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Торжественная церемония вручения премии в&nbsp;КЗ "Зарядье"</div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation slider-navigation__white pl-sm-0 pl-md-0">
                <div class="arrows-nav">
                    <div class="arrows-nav__left">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.5" transform="rotate(-180 23 23)" stroke="#FBFBFB" />
                            <path d="M11.6464 22.6464C11.4512 22.8417 11.4512 23.1583 11.6464 23.3536L14.8284 26.5355C15.0237 26.7308 15.3403 26.7308 15.5355 26.5355C15.7308 26.3403 15.7308 26.0237 15.5355 25.8284L12.7071 23L15.5355 20.1716C15.7308 19.9763 15.7308 19.6597 15.5355 19.4645C15.3403 19.2692 15.0237 19.2692 14.8284 19.4645L11.6464 22.6464ZM34 22.5L12 22.5L12 23.5L34 23.5L34 22.5Z" fill="#FBFBFB" />
                        </svg>
                    </div>
                    <div class="arrows-nav__right">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.5" stroke="#FBFBFB" />
                            <path d="M34.3536 23.3536C34.5488 23.1583 34.5488 22.8417 34.3536 22.6464L31.1716 19.4645C30.9763 19.2692 30.6597 19.2692 30.4645 19.4645C30.2692 19.6597 30.2692 19.9763 30.4645 20.1716L33.2929 23L30.4645 25.8284C30.2692 26.0237 30.2692 26.3403 30.4645 26.5355C30.6597 26.7308 30.9763 26.7308 31.1716 26.5355L34.3536 23.3536ZM12 23.5H34V22.5H12V23.5Z" fill="#FBFBFB" />
                        </svg>
                    </div>
                </div>
                <div class="counter">
                    <span data-active-count>1</span>
                    /
                    <span data-all-count></span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('block.faq')

@include('forms.form_wrapper')

@include('block.partners')

@endsection

@section('scripts')
<script src="{{ mix('js/page/competition.js') }}"></script>
<script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection
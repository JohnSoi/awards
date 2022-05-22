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
                        <a href="javascript://" class="btn btn-red-primary opacity-100 disabled mt-5">
                            прием заявок<br>
                            R.C.Awards 2021<br>
                            завершен
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('block.step')

@include('block.incards')

<section class="section section-content section-themes black-block new-main">
    <div class="container">
        <div class="section-themes__inner">
            <div class="border-top-white"></div>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Право номинировать имеют</h2>
        </div>
    </div>
    <div class="section-themes__content wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.1s" data-wow-offset="0">
        <div class="swiper-container swiper-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card card-themes white">
                        <div class="card-themes__title">
                            <div class="bg_point bg-black"></div>
                            <span class="text">Члены гильдий<br>
                                Russian Creative Week<br>
                                (10 человек в каждой <br>из 14 креативных индустрий)</span>
                        </div>
                        <div class="card-themes__content">
                            <div class="list-type">
                                <div class="list-type__item">
                                    <div class="icon">
                                        <svg width="35" height="8" viewBox="0 0 35 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.8536 4.35355C35.0488 4.15829 35.0488 3.84171 34.8536 3.64645L31.6716 0.464466C31.4763 0.269204 31.1597 0.269204 30.9645 0.464466C30.7692 0.659728 30.7692 0.976311 30.9645 1.17157L33.7929 4L30.9645 6.82843C30.7692 7.02369 30.7692 7.34027 30.9645 7.53553C31.1597 7.7308 31.4763 7.7308 31.6716 7.53553L34.8536 4.35355ZM0.5 4.5H34.5V3.5H0.5V4.5Z" fill="#222222" />
                                        </svg>
                                    </div>
                                    <div class="text">Член гильдии имеет право<br>
                                        подать не более 1 заявки<br>
                                        на каждую из номинаций
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-themes black">
                        <div class="card-themes__title">
                            <div class="bg_point bg-pink"></div>
                            <span class="text">Профессиональные <br>организации в каждой <br>из 14 креативных индустрий, <br>включая межотраслевые структуры</span>
                        </div>
                        <div class="card-themes__content">
                            <div class="list-type">
                                <div class="list-type__item">
                                    <div class="icon">
                                        <svg width="35" height="8" viewBox="0 0 35 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.8536 4.35355C35.0488 4.15829 35.0488 3.84171 34.8536 3.64645L31.6716 0.464466C31.4763 0.269204 31.1597 0.269204 30.9645 0.464466C30.7692 0.659728 30.7692 0.976311 30.9645 1.17157L33.7929 4L30.9645 6.82843C30.7692 7.02369 30.7692 7.34027 30.9645 7.53553C31.1597 7.7308 31.4763 7.7308 31.6716 7.53553L34.8536 4.35355ZM0.5 4.5H34.5V3.5H0.5V4.5Z" fill="#222222" />
                                        </svg>
                                    </div>
                                    <div class="text">Организация имеет право<br>
                                        подать не более 5 заявок<br>
                                        на каждую из номинаций
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation pl-sm-0 pl-md-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
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

<section class="section section-content section-mechanics">
    <div class="container" id="criteria">
        <div class="section-mechanics__main">
            <div class="section-mechanics__main-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                Критерии<br>отбора
            </div>
            <div class="section-mechanics__main-desc wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                Жюри — признанные эксперты<br>
                и лидеры в креативных индустриях
            </div>
            <div class="section-mechanics__main-btns w-100" style="display: none !important;" elem-hide>
                <a href="{{ Route('index') }}#submit" class="btn btn-red-primary w-xs-100 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30" data-form-contest>подать заявку</a>
            </div>
        </div>
        <div class="section-mechanics__stages">
            <div class="section-mechanics__stage wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                <div class="section-mechanics__stage-point"></div>
                <div class="section-mechanics__stage-title">1.</div>
                <div class="section-mechanics__stage-date">Вклад в развитие<br>
                    креативных индустрий<br>
                    России&nbsp;
                </div>
            </div>
            <div class="section-mechanics__stage wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                <div class="section-mechanics__stage-point"></div>
                <div class="section-mechanics__stage-title">2.</div>
                <div class="section-mechanics__stage-date">Общественный резонанс:<br>
                    обсуждение и&nbsp;признание<br>
                    в СМИ и профессиональном сообществе<br>
                </div>
            </div>
            <div class="section-mechanics__stage wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                <div class="section-mechanics__stage-point"></div>
                <div class="section-mechanics__stage-title">3.</div>
                <div class="section-mechanics__stage-date">Уникальность,
                    <br>инновационность
                </div>
            </div>
        </div>
    </div>
</section>

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

@include('block.form')

@include('block.partners')

@endsection

@section('scripts')
<script src="{{ mix('js/page/competition.js') }}"></script>
@endsection
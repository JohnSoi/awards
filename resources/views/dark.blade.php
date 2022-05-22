@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">

<!-- disabled phone numbers -->
<meta name="format-detection" content="telephone=no">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-main">
    <div class="postmark-position animated-marks container">
        <div id="postmarks"></div>
    </div>
    <div class="postmark-position notanimated-marks container">
        <div class="postmark-area mt-md-n4 mt-sm-n4 mt-n3" style="z-index:0;">
            <div class="post-mark post-mark__green">
                <object type="image/svg+xml" data="/img/V2/elements/postmarks/green.svg"></object>
            </div>
            <div class="post-mark post-mark__emerland">
                <object type="image/svg+xml" data="/img/V2/elements/postmarks/emerland.svg"></object>
            </div>
        </div>
        <div class="postmark-area mt-md-n4 mt-sm-n4 mt-n3" style="z-index:5;">
            <div class="post-mark post-mark__violet">
                <object type="image/svg+xml" data="/img/V2/elements/postmarks/violet.svg"></object>
            </div>
            <div class="post-mark post-mark__pink">
                <object type="image/svg+xml" data="/img/V2/elements/postmarks/pink.svg"></object>
            </div>
            <div class="post-mark post-mark__darkred">
                <object type="image/svg+xml" data="/img/V2/elements/postmarks/darkred.svg"></object>
            </div>
        </div>
    </div>
    <div class="container first-container">
        <div class="slide-wrapper">
            <div class="slide-inner">
                <div class="slide slide-dark mt-md-n4 mt-sm-n4 mt-n3">
                    <div class="slide-content">
                        <h1 class="slide__title">
                            <span class="font-weight-300 text-white">Russian</span><br>
                            <span class="font-weight-700 text-semipink">Creative<br>Awards</span><br>
                            <span class="font-weight-700 text-semipink">2021</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-cta new-main">
    <div class="container">
        <div class="section-cta__inner">
            <h2 class="section-center-title text-semipink wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Независимая <br>кросс-отраслевая премия <br>в области креативных индустрий России
            </h2>
            <a href="#submit" class="btn btn-white-primary">Участвовать</a>
        </div>
    </div>
</section>

<section class="section section-content section-fewspeakers">
    <div class="container" id="award">
        <div class="border-top-black"></div>
        <div class="section-fewspeakers__inner">
            <h2 class="section-title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">R.C.Awards</h2>
            <div class="section-fewspeakers__content">
                <div class="section-fewspeakers__columns">
                    <div class="column-mobile">
                        <div class="image-column">
                            <div id="mainspring-sm"></div>
                        </div>
                    </div>
                    <div class="column-left">
                        <h2 class="section-fewspeakers__h2 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Для чего?</h2>
                        <p class="section-fewspeakers__p wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            Премия призвана выявить наиболее успешные практики, разработанные в креативном секторе нашей страны, обеспечить им поддержку и&nbsp;национальное признание.
                            <br><br>
                            Премия позволит отметить и&nbsp;выделить
                            лучшие креативные достижения страны.
                            <br><br>
                            Наградить авторов и&nbsp;с их помощью вывести Россию
                            в&nbsp;число передовых креативных держав мира.
                            Премия&nbsp;подводит итоги 2020-2021гг.
                        </p>
                        <a href="#submit" class="btn btn-primary w-md-fit">Подать заявку</a>
                    </div>
                    <div class="column-right">
                        <div class="image-column">
                            <div id="mainspring"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-newyear new-main">
    <div class="container">
        <div class="slide-wrapper">
            <div class="slide-inner wow fadeIn">
                <div class="slide slide-new-year">
                    <div class="slide-content">
                        <h4 class="slide__title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            <span class="font-weight-700">Проекты принимаются
                                по&nbsp;номинациям</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-step">
    <div class="container" id="nomination">
        <div class="section-step__inner" style="display: none !important;" elem-hide>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                Направления Russian<br>
                Creative Awards 2021
            </h2>
        </div>
    </div>
    <div class="swiper-container swiper-step wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
        <div class="swiper-wrapper" cursor-status>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink" data-white>
                    <div class="color-card__title">
                        Продюсер года в сфере <br>креативных индустрий
                    </div>
                    <div class="color-card__desc">
                        Предприимчивый лидер, добившийся за год лучших результатов в инициации, поддержке и развитии проектов из сферы КИ
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Менеджер года в сфере <br>креативных индустрий
                    </div>
                    <div class="color-card__desc">
                        Специалист, показавший наиболее впечатляющие результаты в управлении творческой/креативной командой, по итогам года
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink" data-white>
                    <div class="color-card__title">
                        Меценат <br>года
                    </div>
                    <div class="color-card__desc">
                        Человек или организация, внесшая наиболее весомый вклад в развитие креативных индустрий России
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Стартап <br>года
                    </div>
                    <div class="color-card__desc">
                        Наиболее заметный креативный бизнес-проект, находящийся в начале пути. Номинация является одной из наиболее значимых, в силу ориентира на выявление молодых перспективных творческих предпринимателей
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink" data-white>
                    <div class="color-card__title">
                        Образовательный <br>проект в сфере КИ
                    </div>
                    <div class="color-card__desc">
                        Эффективная и яркая образовательная программа, направленная на максимальную реализацию молодых людей, обладающих творческим потенциалом
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Креаполис <br>года
                    </div>
                    <div class="color-card__desc">
                        Креативный кластер/пространство на территории России, которое внесло наибольший вклад в развитие места: района, города, региона
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink" data-white>
                    <div class="color-card__title">
                        Новый <br>культурный код
                    </div>
                    <div class="color-card__desc">
                        Самый масштабный и фундаментальный проект года, направленный на формирование самоидентичности российской креативной отрасли
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Креативный <br>регион года
                    </div>
                    <div class="color-card__desc">
                        Субъект Российской Федерации, инициативы которого оказались наиболее эффективными и знаковыми для развития креативной экономики
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink" data-white>
                    <div class="color-card__title">
                        Лучший креативный проект <br>из сырьевого бизнеса
                    </div>
                    <div class="color-card__desc">
                        Проект на стыке двух сфер: сырьевой и креативной
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Коллаборация <br>года в сфере КИ
                    </div>
                    <div class="color-card__desc">
                        Наиболее успешный пример эффективного взаимодействия двух самостоятельных компаний/коллективов в рамках развития креативной отрасли
                    </div>
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
</section>

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
            <div class="section-mechanics__main-btns w-100">
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

<section class="section section-content section-service">
    <div class="container">
        <div class="section-service__inner">
            <div class="border-top-white"></div>
            <h2 class="section-title mb-0 wow fadeInUp mw-100" data-wow-duration="0.8s" data-wow-delay="0.2s">Лауреаты Russian Creative Awards 2021 получат:
            </h2>
        </div>
        <div class="section-service__content">
            <div class="service-grid">
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Медиасопровождение от
                        <br>организаторов и партнеров Премии
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Возможность представить свои
                        <br>проекты в рамках Экспо2021 в Дубае
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Национальное
                        <br>признание
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Денежные призы
                        <br>от спонсоров
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Благодарности от
                        <br>руководства страны
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">
                        Публикация в специальном<br>
                        сборнике «Russian Creative
                        <br>Awards: лучшие среди равных»
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Сопровождение со стороны <br>организаторов Премии</div>
                </div>
                <!-- card -->
            </div>
            <div class="service-swiper">
                <div class="swiper-container swiper-eco wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Медиасопровождение от
                                    <br>организаторов и партнеров Премии
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Возможность представить свои
                                    проекты в рамках Экспо2021 в Дубае
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Национальное<br>
                                    признание
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Денежные призы<br>
                                    от спонсоров
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Благодарности от<br>
                                    руководства страны</div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">
                                    Публикация в специальном
                                    сборнике «Russian Creative<br>
                                    Awards: лучшие среди равных»
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Сопровождение со стороны <br>
                                    организаторов Премии</div>
                            </div>
                        </div>
                        <!-- slides -->
                    </div>
                    <div class="slider-navigation pl-sm-0 pl-md-0">
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
        </div>
    </div>
</section>

<section class="section section-content section-direction">
    <div class="container" id="jury">
        <div class="border-top-black"></div>
        <div class="section-direction__inner">
            <h2 class="section-title mw-100 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">НАБЛЮДАТЕЛЬНЫЙ СОВЕТ RUSSIAN&nbsp;CREATIVE AWARDS И&nbsp;RCW</h2>
        </div>
    </div>
    <div class="section-direction__wrapper wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div class="swiper-container swiper-3">
            <div class="swiper-wrapper" cursor-status data-white>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/kirienko.png">
                        </div>
                        <div class="direction-item__name">Кириенко<br>Сергей<br>Владиленович</div>
                        <div class="direction-item__position">
                            Первый заместитель Руководителя<br>Администрации<br>Президента РФ
                        </div>
                        <div class="direction-item__devider"></div>
                        <div class="direction-item__chair">
                            Председатель Наблюдательного совета
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/chernishenko.png">
                        </div>
                        <div class="direction-item__name">Чернышенко<br>Дмитрий<br>Николаевич</div>
                        <div class="direction-item__position">
                            Заместитель Председателя Правительства Российской Федерации
                        </div>
                        <div class="direction-item__devider"></div>
                        <div class="direction-item__chair">
                            Сопредседатель Наблюдательного совета
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/novikov.png">
                        </div>
                        <div class="direction-item__name">Новиков<br>Сергей<br>Геннадьевич</div>
                        <div class="direction-item__position">
                            Начальник Управления Президента Российской Федерации по обществен-<br>ным проектам
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/abramova.png">
                        </div>
                        <div class="direction-item__name">Абрамова<br>Марина<br>Николаевна</div>
                        <div class="direction-item__position">
                            Директор ФГБУ «Роскультцентр». Директор фест-форума «Российская креативная неделя»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/gref.png">
                        </div>
                        <div class="direction-item__name">Греф<br>Герман<br>Оскарович</div>
                        <div class="direction-item__position">
                            Президент и председатель правления ПАО «Сбербанк России»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/zharov.png">
                        </div>
                        <div class="direction-item__name">Жаров<br>Александр<br>Александрович</div>
                        <div class="direction-item__position">
                            Генеральный директор АО «Газпром-Медиа Холдинг»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/zhuravski.png">
                        </div>
                        <div class="direction-item__name">Журавский<br>Александр<br>Владимирович</div>
                        <div class="direction-item__position">
                            Заместитель начальника Управления Президента Российской Федерации по общественным проектам
                        </div>
                        <div class="direction-item__devider"></div>
                        <div class="direction-item__chair">
                            Ответственный секретарь Наблюдательного совета
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/kobyakov.png">
                        </div>
                        <div class="direction-item__name">Кобяков<br>Антон<br>Анатольевич
                        </div>
                        <div class="direction-item__position">
                            Советник Президента Российской Федерации
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/lyubimova.png">
                        </div>
                        <div class="direction-item__name">Любимова<br>Ольга<br>Борисовна</div>
                        <div class="direction-item__position">
                            Министр культуры Российской Федерации
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/balanova.png">
                        </div>
                        <div class="direction-item__name">Баланова<br>Светлана<br>Евгеньевна</div>
                        <div class="direction-item__position">
                            Генеральный директор АО «Национальная Медиа Группа»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/sergunina.png">
                        </div>
                        <div class="direction-item__name">Сергунина<br>Наталья<br>Алексеевна</div>
                        <div class="direction-item__position">
                            Заместитель Мэра Москвы в Правительстве Москвы — руководитель Аппарата Мэра и Правительства Москвы
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/repik.png">
                        </div>
                        <div class="direction-item__name">Репик<br>Алексей<br>Евгеньевич</div>
                        <div class="direction-item__position">
                            Председатель Общероссийской общественной организации «Деловая Россия»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/mihelson.png">
                        </div>
                        <div class="direction-item__name">Михельсон<br>Леонид<br>Викторович</div>
                        <div class="direction-item__position">
                            Председатель Правления ПАО «Новатэк»
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/manturov.png">
                        </div>
                        <div class="direction-item__name">Мантуров<br>Денис<br>Леонидович</div>
                        <div class="direction-item__position">
                            Министр промышленности и торговли Российской Федерации
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/stepashin.png">
                        </div>
                        <div class="direction-item__name">Степашин<br>Сергей<br>Вадимович</div>
                        <div class="direction-item__position">
                            Президент Российского книжного союза
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="./../../../img/V2/page/main/meo/choopsheva.png">
                        </div>
                        <div class="direction-item__name">Чупшева<br>Светлана<br>Витальевна</div>
                        <div class="direction-item__position">
                            Генеральный директор Агентства стратегических инициатив
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-navigation slider-navigation__white pl-sm-0 pl-md-0">
                <div class="arrows-nav arrows-nav">
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
        <div class="swiper-container swiper-history wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="swiper-wrapper" cursor-status data-white>
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
                        <div class="card-timeline__date">28.10-20.11</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Формирование шорт-листа номинантов</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">21.11 - 15.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Работа большого жюри</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">18.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Церемония торжественного вручения премии в КЗ "Зарядье"</div>
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

@include('block.form')

<section class="section section-content section-themes black-block new-main">
    <div class="container section-themes__new wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0" id="award">
        <div class="border-top-white"></div>
        <h2 class="section-title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">О премии</h2>
        <div class="section-themes__content">
            <div class="objects-wrapper">
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="object-item object-item__bg-transparent object-item__bordered object-item__circle">
                        <div class="object-item__suptitle">10</div>
                        <div class="object-item__subtitle">номинаций</div>
                    </div>
                </div>
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="object-item object-item__bg-white object-item__bordered">
                        <div class="object-item__suptitle">50 000 000</div>
                        <div class="object-item__subtitle">информационный <br>охват</div>
                    </div>
                </div>
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
                    <div class="object-item object-item__bg-gray object-item__circle">
                        <div class="object-item__suptitle">100+</div>
                        <div class="object-item__subtitle">
                            признанных лидеров<br>
                            и экспертов в сфере<br>
                            креативных индустрий
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-newsblock" data-section-news-block>
    <div class="container" id="news">
        <div class="border-top-black"></div>
        <div class="section-newsblock__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Новости</h4>
        </div>
        <div style="display: none;">
            @include('post.item', [
            'type' => 'news-block'
            ])
        </div>
        <div class="section-newsblock__content" items-list-news-block="{{ Route('post.index') }}"></div>
        <div class="news-btn-area wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
            <a href="{{ Route('post.index') }}" target="_blank" class="btn btn-primary w-xs-100">Читать больше</a>
        </div>
    </div>
</section>

<section class="section section-content section-partners">
    <div class="container container-partners" id="partners">
        <div class="border-top-black"></div>
        <div class="section-partners__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Организаторы</h2>
            <div class="section-partners__content">
                @include('block.partners')
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-contacts">
    <div class="container" id="contacts">
        <div class="border-top-black"></div>
        <div class="section-contacts__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Контакты</h2>
            <div class="section-contacts__content">
                <div class="contacts-grid">
                    <div class="contacts-grid__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="contacts-grid__item-title">
                            Организаторы
                        </div>
                        <div class="contacts-grid__item-desc">
                            По вопросам сотрудничества свяжитесь с дирекцией Russian Creative Awards
                        </div>
                        <div class="contacts-grid__item-link">
                            <a href="mailto:award@creativityweek.ru">award@creativityweek.ru</a>
                        </div>
                    </div>
                    <div class="contacts-grid__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="contacts-grid__item-title">
                            PR-служба
                        </div>
                        <div class="contacts-grid__item-desc">
                            По вопросам взаимодействия обращайтесь
                        </div>
                        <div class="contacts-grid__item-link">
                            <a href="mailto:press@creativityweek.ru">press@creativityweek.ru</a>
                        </div>
                    </div>
                    <div class="contacts-grid__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="contacts-grid__item-title">
                            Поддержка
                        </div>
                        <div class="contacts-grid__item-desc">
                            Если у вас возникли сложности с&nbsp;подачей заявки, обратитесь в&nbsp;техническую поддержку:
                        </div>
                        <div class="contacts-grid__item-link">
                            <a href="mailto:psupport@creativityweek.ru">support@creativityweek.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<svg width="165" height="126" viewBox="0 0 165 126" fill="none" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="gradient" x1="184.619" y1="53.0393" x2="12.1039" y2="70.0247" gradientUnits="userSpaceOnUse">
            <stop offset="0.25" stop-color="#A8A8A8" />
            <stop offset="1" stop-color="white" />
        </linearGradient>
    </defs>
</svg>
@endsection

@section('scripts')
<script src="{{ mix('js/page/dark.js') }}"></script>
@endsection
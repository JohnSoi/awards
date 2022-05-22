@extends('layouts.app')

@section('title', 'Russian Creative Award 2021')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-main wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
    <div class="postmark-position animated-marks container">
        <div id="postmarks"></div>
    </div>
    <div class="postmark-position notanimated-marks container">
        <div class="postmark-area mt-md-n4 mt-sm-n4 mt-n3" style="z-index:0;">
            <div class="post-mark post-mark__green wow fadeIn" data-wow-delay="0.2s"></div>
            <div class="post-mark post-mark__emerland wow fadeIn" data-wow-delay="0.4s"></div>
        </div>
        <div class="postmark-area mt-md-n4 mt-sm-n4 mt-n3" style="z-index:5;">
            <div class="post-mark post-mark__violet wow fadeIn" data-wow-delay="0.3s"></div>
            <div class="post-mark post-mark__pink wow fadeIn" data-wow-delay="0.6s"></div>
            <div class="post-mark post-mark__darkred wow fadeIn" data-wow-delay="0.1s"></div>
        </div>
    </div>
    <div class="container position-relative">
        <div class="slide-wrapper">
            <div class="slide-inner">
                <div class="slide mt-md-n4 mt-sm-n4 mt-n3">
                    <div class="slide-content">
                        <div class=" slide__date">
                            <div class="slide__date-text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">&nbsp;</div>
                            <div class="slide__date-place wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">&nbsp;</div>
                        </div>
                        <h1 class="slide__title">
                            <span class="font-weight-300 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Russian</span><br>
                            <span class="font-weight-700 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Creative<br>Award</span><br>
                            <span class="font-weight-700 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">2021</span>
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
            <h1 class="section-center-title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">независимый открытый конкурс в области креативных индустрий России
            </h1>
            <p class="section-center-text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">единственная кросc-отраслевая премия,
                не имеющая аналогов в мире
            </p>
            <a href="{{ Route('index') }}#submit" data-toggle="modal" data-target="#getMe" class="btn btn-primary">Участвовать</a>
        </div>
    </div>
</section>

<section class="section section-content section-fewspeakers">
    <div class="container">
        <div class="border-top-black"></div>
        <div class="section-fewspeakers__inner">
            <h2 class="section-title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">R.C.Award</h2>
            <div class="section-fewspeakers__content wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="section-fewspeakers__columns">
                    <div class="column-mobile">
                        <div class="image-column">
                            <div id="mainspring-sm"></div>
                        </div>
                    </div>
                    <div class="column-left">
                        <h2 class="section-fewspeakers__h2">Для кого?</h2>
                        <p class="section-fewspeakers__p">
                            Премия призвана выявить наиболее успешные практики, разработанные в креативном секторе нашей страны, обеспечить им поддержку и национальное признание.
                            <br><br>
                            Премия позволит отметить и выделить
                            лучшие креативные достижения страны.
                            <br><br>
                            Наградить авторов и с их помощью вывести Россию
                            в число передовых креативных держав мира.
                            Премия подводит итоги 2020-2021гг
                        </p>
                        <a href="{{ Route('index') }}#submit" data-toggle="modal" data-target="#getSpeaker" class="btn btn-primary w-md-fit">Подать заявку</a>
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
                        <h1 class="slide__title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            <span class="font-weight-700">Проекты принимаются
                                по&nbsp;направлениям</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-step">
    <div class="container" id="nomination">
        <div class="section-step__inner">
            <div class="border-top-black"></div>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                Номинации Russian<br>
                Creative Awards 2021
            </h2>
        </div>
    </div>
    <div cursor-status class="swiper-container swiper-step wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink">
                    <div class="color-card__title">
                        Креативный <br>продюсер года
                    </div>
                    <div class="color-card__desc">
                        Номинация, направленная на&nbsp;выявление и признание специалиста, показавшего в&nbsp;течение&nbsp;года наиболее впечатляющие результаты в&nbsp;поисках&nbsp;и&nbsp;руководстве творческой&nbsp;группой проекта
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Креативный <br>менеджер года
                    </div>
                    <div class="color-card__desc">
                        Номинация, в рамках которой будет&nbsp;награжден специалист, добившийся за год лучших результатов в инициации, поддержке&nbsp;и&nbsp;развитии творческих&nbsp;идей в креативном сообществе страны
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink">
                    <div class="color-card__title">
                        Меценат <br>года
                    </div>
                    <div class="color-card__desc">
                        Номинация, победителем в&nbsp;которой&nbsp;станет участник, внесший&nbsp;наиболее весомый вклад&nbsp;в&nbsp;развитие креативных индустрий в России
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Стартап года / <br>Прорыв года
                    </div>
                    <div class="color-card__desc">
                        Наиболее яркий проект 2021 года, находящий в самом начале своего пути. Это направление является одним из наиболее значимых, в&nbsp;силу&nbsp;своего ориентира на выявление молодых талантов
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink">
                    <div class="color-card__title">
                        Образовательный <br>проект в сфере КИ
                    </div>
                    <div class="color-card__desc">
                        Необычная и прогрессивная образовательная программа, направленная на то, чтобы&nbsp;молодые&nbsp;люди, обладающие&nbsp;творческим потенциалом смогли себя реализовать
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Креаполис года (креативный кластер / пространство)
                    </div>
                    <div class="color-card__desc">
                        Креативный кластер / пространство на территории России, которому удалось внести наибольший вклад&nbsp;в&nbsp;развитие креативной отрасли страны
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink">
                    <div class="color-card__title">
                        Новый <br>культурный код
                    </div>
                    <div class="color-card__desc">
                        Номинация, направленная на&nbsp;выявление самого масштабного&nbsp;и&nbsp;фундаментального проекта о самоидентичности российской креативной отрасли
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Креативный <br>регион года
                    </div>
                    <div class="color-card__desc">
                        Номинация, где будет награжден субъект Российской Федерации, инициативы которого окажутся самыми ценными для развития креативной экономики страны
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__light bg-pink">
                    <div class="color-card__title">
                        Лучший креативный <br>проект из сырьевого <br>бизнеса
                    </div>
                    <div class="color-card__desc">
                        Номинация, победителем которой станет проект на стыке 2х сфер: сырьевой и креативной
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card color-card__dark bg-black ">
                    <div class="color-card__title">
                        Коллаборация <br>года в сфере КИ
                    </div>
                    <div class="color-card__desc">
                        Для победы претендентам потребуется показать наиболее успешный пример эффективного взаимодействия для развития креативной отрасли
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
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Заявки принимаются от</h2>
        </div>
    </div>
    <div class="section-themes__content wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.1s" data-wow-offset="0">
        <div cursor-status class="swiper-container swiper-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card card-themes white" data-white>
                        <div class="card-themes__title">
                            <div class="bg_point bg-pink"></div>
                            <span class="text">Членов гильдий
                                Russian Creative Week
                                (10 человек в каждой из 14 креативных индустрий)</span>
                        </div>
                        <div class="card-themes__content">
                            <div class="list-type">
                                <div class="list-type__item">
                                    <div class="icon">
                                        <svg width="35" height="8" viewBox="0 0 35 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.8536 4.35355C35.0488 4.15829 35.0488 3.84171 34.8536 3.64645L31.6716 0.464466C31.4763 0.269204 31.1597 0.269204 30.9645 0.464466C30.7692 0.659728 30.7692 0.976311 30.9645 1.17157L33.7929 4L30.9645 6.82843C30.7692 7.02369 30.7692 7.34027 30.9645 7.53553C31.1597 7.7308 31.4763 7.7308 31.6716 7.53553L34.8536 4.35355ZM0.5 4.5H34.5V3.5H0.5V4.5Z" fill="#222222" />
                                        </svg>
                                    </div>
                                    <div class="text">Член гильдии имеет право
                                        подать не более 1 заявки
                                        на каждую из номинаций
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card-themes black" data-black>
                        <div class="card-themes__title">
                            <div class="bg_point bg-lightblue"></div>
                            <span class="text">Профессиональных организаций в каждой из 14 креативных индустрий, включая межотраслевые структуры</span>
                        </div>
                        <div class="card-themes__content">
                            <div class="list-type">
                                <div class="list-type__item">
                                    <div class="icon">
                                        <svg width="35" height="8" viewBox="0 0 35 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M34.8536 4.35355C35.0488 4.15829 35.0488 3.84171 34.8536 3.64645L31.6716 0.464466C31.4763 0.269204 31.1597 0.269204 30.9645 0.464466C30.7692 0.659728 30.7692 0.976311 30.9645 1.17157L33.7929 4L30.9645 6.82843C30.7692 7.02369 30.7692 7.34027 30.9645 7.53553C31.1597 7.7308 31.4763 7.7308 31.6716 7.53553L34.8536 4.35355ZM0.5 4.5H34.5V3.5H0.5V4.5Z" fill="#222222" />
                                        </svg>
                                    </div>
                                    <div class="text">Не более 5 заявок на каждую
                                        из номинаций от 1 организации
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
                Жюри: признанные эксперты<br>
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
                <div class="section-mechanics__stage-date">Вклад в развитие
                    креативных индустрий
                    России&nbsp;
                </div>
            </div>
            <div class="section-mechanics__stage wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                <div class="section-mechanics__stage-point"></div>
                <div class="section-mechanics__stage-title">2.</div>
                <div class="section-mechanics__stage-date">Общественный резонанс:
                    обсуждение и&nbsp;признание
                    в СМИ и профессиональном сообществе
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
            <h2 class="section-title mb-0 wow fadeInUp mw-100" data-wow-duration="0.8s" data-wow-delay="0.2s">Лауреат в каждой из номинаций Russian Creative Awards 2021 получит:
            </h2>
        </div>
        <div class="section-service__content">
            <div class="service-grid">
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
                    <div class="service-card__desc">Сопровождение со стороны <br>организаторов Премии</div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Участие в акселераторе от АНО
                        <br>«Институт развития интернета»
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Медиасопровождение от АНО
                        <br>«Национальные приоритеты»
                        <br>и партнеров Премии
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
            </div>
            <div class="service-swiper">
                <div class="swiper-container swiper-eco wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Национальное
                                    признание
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Денежные призы
                                    от спонсоров
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Благодарности от
                                    руководства страны</div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Сопровождение со стороны организаторов Премии</div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Участие в акселераторе от АНО
                                    «Институт развития интернета»</div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Медиасопровождение от АНО
                                    «Национальные приоритеты»
                                    и партнеров Премии
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

<section class="section section-content section-programm">
    <div class="container" id="festival">
        <div class="border-top-black"></div>
        <div class="section-programm__inner">
            <div class="section-programm__columns wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="column-mobile">
                    <div class="image-column">
                        <div class="sticker sticker__right-top sticker__pink">R.C.AWARD</div>
                        <div id="sun-sm"></div>
                    </div>
                </div>
                <div class="column-left">
                    <h2 class="section-programm__h2">
                        «Russian Creative Awards: лучшие<br>
                        среди равных»
                    </h2>
                    <p class="section-programm__p">
                        По результатам Премии будет издан специальный сборник «Russian Creative Awards: лучшие среди равных», который будет распространяться на всех крупных мероприятий в сфере креативных
                        индустрий России.
                    </p>
                </div>
                <div class="column-right">
                    <div class="image-column">
                        <div class="sticker sticker__right-top sticker__pink">R.C.AWARD</div>
                        <div id="sun"></div>
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
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Жюри</h2>
        </div>
    </div>
    <div class="section-direction__wrapper wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div cursor-status class="swiper-container swiper-3">
            <div class="swiper-wrapper" data-white>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img src="./../../../img/V2/page/main/meo/kirienko.png">
                        </div>
                        <div class="direction-item__name">Кириенко<br>Сергей<br>Владиленович</div>
                        <div class="direction-item__position">
                            Первый заместитель Руководителя<br>Администрации<br>Президента
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
                            <img src="./../../../img/V2/page/main/meo/chernishenko.png">
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
                            <img src="./../../../img/V2/page/main/meo/novikov.png">
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
                            <img src="./../../../img/V2/page/main/meo/abramova.png">
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
                            <img src="./../../../img/V2/page/main/meo/gref.png">
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
                            <img src="./../../../img/V2/page/main/meo/zharov.png">
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
                            <img src="./../../../img/V2/page/main/meo/zhuravski.png">
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
                            <img src="./../../../img/V2/page/main/meo/kobyakov.png">
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
                            <img src="./../../../img/V2/page/main/meo/lyubimova.png">
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
                            <img src="./../../../img/V2/page/main/meo/balanova.png">
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
                            <img src="./../../../img/V2/page/main/meo/sergunina.png">
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
                            <img src="./../../../img/V2/page/main/meo/repik.png">
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
                            <img src="./../../../img/V2/page/main/meo/mihelson.png">
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
                            <img src="./../../../img/V2/page/main/meo/manturov.png">
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
                            <img src="./../../../img/V2/page/main/meo/stepashin.png">
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
                            <img src="./../../../img/V2/page/main/meo/choopsheva.png">
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

<section class="section section-content section-direction">
    <div class="container">
        <div class="border-top-black"></div>
        <div class="section-direction__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Оргкомитет Премии</h2>
        </div>
    </div>
    <div class="section-direction__wrapper wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div cursor-status class="swiper-container swiper-org">
            <div class="swiper-wrapper" data-white>
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img src="./../../../img/V2/page/main/meo/kirienko.png">
                        </div>
                        <div class="direction-item__name">Кириенко<br>Сергей<br>Владиленович</div>
                        <div class="direction-item__position">
                            Первый заместитель Руководителя<br>Администрации<br>Президента
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
                            <img src="./../../../img/V2/page/main/meo/chernishenko.png">
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
                            <img src="./../../../img/V2/page/main/meo/novikov.png">
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
                            <img src="./../../../img/V2/page/main/meo/abramova.png">
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
                            <img src="./../../../img/V2/page/main/meo/gref.png">
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
                            <img src="./../../../img/V2/page/main/meo/zharov.png">
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
                            <img src="./../../../img/V2/page/main/meo/zhuravski.png">
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
                            <img src="./../../../img/V2/page/main/meo/kobyakov.png">
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
                            <img src="./../../../img/V2/page/main/meo/lyubimova.png">
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
                            <img src="./../../../img/V2/page/main/meo/balanova.png">
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
                            <img src="./../../../img/V2/page/main/meo/sergunina.png">
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
                            <img src="./../../../img/V2/page/main/meo/repik.png">
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
                            <img src="./../../../img/V2/page/main/meo/mihelson.png">
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
                            <img src="./../../../img/V2/page/main/meo/manturov.png">
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
                            <img src="./../../../img/V2/page/main/meo/stepashin.png">
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
                            <img src="./../../../img/V2/page/main/meo/choopsheva.png">
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
                о важных датах в истории бренда
            </p>
        </div>
    </div>
    <div class="section-history__content section-history__content-slider">
        <div cursor-status class="swiper-container swiper-history wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="swiper-wrapper" data-white>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">27.08</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Официальный старт Премии</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">28.08 - 15.10</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Формирование лонг-листа номинантов</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">16.10 - 20.11</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Формирование шорт-листа номинантов</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">21.11 - 10.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Работа Большого жюри</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card-timeline">
                        <div class="section-history__line"></div>
                        <div class="card-timeline__date">16.12</div>
                        <div class="card-timeline__point"></div>
                        <div class="card-timeline__desc">Церемония торжественного вручения Премии</div>
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

<section class="section section-content section-submit">
    <div class="container" id="submit">
        <div class="border-top-black"></div>
        <div class="section-submit__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Подача заявки</h4>
        </div>
        <div class="section-submit__content">
            <form class="add-form" action="">
                @csrf
                <div class="add-form__left">
                    <div class="form-types" style="display: none !important;" elem-hide>
                        <div class="select-control-inner" data-valid-input="industry_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Выберите креативную индустрию</div>
                                <div class="__select__content" data-select-options>
                                    <input name="industry_id" id="industry_1" class="__select__input" type="radio" value="1" />
                                    <label for="industry_1" class="__select__label">Дизайн</label>
                                    <input name="industry_id" id="industry_2" class="__select__input" type="radio" value="2" />
                                    <label for="industry_2" class="__select__label">Компьютерная графика</label>
                                    <input name="industry_id" id="industry_3" class="__select__input" type="radio" value="3" />
                                    <label for="industry_3" class="__select__label">Музыка и саунд-дизайн</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-types">
                        <div class="select-control-inner" data-valid-input="industry_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Выберите номинацию</div>
                                <div class="__select__content" data-select-options>
                                    <input name="nomination_id" id="nomination_1" class="__select__input" type="radio" value="1" />
                                    <label for="nomination_1" class="__select__label">Номинация 1</label>
                                    <input name="nomination_id" id="nomination_2" class="__select__input" type="radio" value="2" />
                                    <label for="nomination_2" class="__select__label">Номинация 2</label>
                                    <input name="nomination_id" id="nomination_3" class="__select__input" type="radio" value="3" />
                                    <label for="nomination_3" class="__select__label">Номинация 3</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Кто номинирует*</label>
                        <input name="name" type="text" class="form-type-text" required>
                    </div>
                    <div class="form-types mt-auto">
                        <label class="form-type-label">Вклад в развитие креативных индустрий России (<span data-output-count="description" data-max-count="3000">0</span>/3000)*</label>
                        <textarea name="description" type="text" class="form-type-text form-type-textarea" rows="6" data-input-count="description"></textarea>
                    </div>
                </div>
                <div class="add-form__center">
                    <div class="form-types" file-group>
                        <label class="form-type-label" for="file-upload">Презентация проекта</label>
                        <input name="image" id="file-upload" type="file">
                        <div class="form-type-text form-type-file" file-change-name="image"></div>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Уникальность, инновационность (<span data-output-count="unique" data-max-count="2000">0</span>/2000)*</label>
                        <textarea name="unique" type="text" class="form-type-text form-type-textarea form-min-h-unset" rows="1" data-input-count="unique"></textarea>
                    </div>
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Общественный резонанс (<span data-output-count="why" data-max-count="5000">0</span>/5000)*</label>
                        <textarea name="why" type="text" class="form-type-text form-type-textarea" rows="6" data-input-count="why"></textarea>
                    </div>
                </div>
                <div class="add-form__right">
                    <div class="form-types">
                        <label class="form-type-label">Регион номинируемого *</label>
                        <input name="name" type="text" class="form-type-text" required>
                    </div>
                    <div class="add-form__double">
                        <div class="form-types">
                            <label class="form-type-label">Телефон номинанта</label>
                            <input data-mask-phone="" type="text" class="form-type-text" name="phone" data-storage>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Email номинанта</label>
                            <input name="time" type="email" class="form-type-text">
                        </div>
                    </div>
                    <div class="add-form__double">
                        <div class="form-types">
                            <label class="form-type-label">Телефон, кто номинирует</label>
                            <input data-mask-phone="" type="text" class="form-type-text" name="phone" data-storage>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Email, кто номинирует</label>
                            <input name="time" type="email" class="form-type-text">
                        </div>
                    </div>
                    <div class="w-100 mt-auto">
                        <button class="btn btn-primary w-100">Подать заявку</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

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
        <div class="section-newsblock__content">
            @include('post.item')
            @include('post.item')
            @include('post.item')
            @include('post.item')
        </div>
    </div>
</section>

<section class="section section-content section-partners">
    <div class="container container-partners" id="partners">
        <div class="border-top-black"></div>
        <div class="section-partners__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Организаторы</h2>
            <div class="section-partners__content">
                <div class="row partners-stripe">
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://xn--e1ajdjblfdlcg2b2e.xn--p1ai/" target="_blank"><img src="./../../../img/V2/page/main/partners/roskult.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://bookunion.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/rkb.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://xn--80afcdbalict6afooklqi5o.xn--p1ai/" target="_blank"><img src="./../../../img/V2/page/main/partners/ppf.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top-black"></div>
        <div class="section-partners__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Партнеры</h2>
            <div class="section-partners__content">
                <div class="row partners-stripe">
                    <div class="col-lg-3 col-md-12 col-12 partner-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Генеральный партнер</div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.sberbank.ru/ru/person" target="_blank"><img src="./../../../img/V2/page/main/partners/sber-color.svg"></a>
                    </div>
                </div>
            </div>

            <div class="section-partners__content">
                <div class="row partners-stripe">
                    <div class="col-lg-3 col-md-12 col-12 partner-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Тематический партнер</div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://prosv.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/prosveshenie.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://my.games/" target="_blank"><img src="./../../../img/V2/page/main/partners/mygames.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://nmg.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/nationalmediagroup-color.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img partner-img__small wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://yandex.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/yandex-color.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img partner-img__small wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://eksmo.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/eksmo-color.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://gazprom-media.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/gazprommedia-color.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="javascript://" target="_blank"><img src="./../../../img/V2/page/main/partners/zvonko.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://gum.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/gum.svg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-partners__inner">
            <div class="section-partners__content">
                <div class="row partners-stripe">
                    <div class="col-lg-3 col-md-12 col-12 partner-title">Партнеры</div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://minobrnauki.gov.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/minobr.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://moscow.megafon.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/megafon.svg"></a>
                        <div class="partner-img__subtitle px-md-3">
                            официальный телекоммуникационный партнер
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://park-gorkogo.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/gorkiypark.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.mos.ru/dpir/" target="_blank"><img src="./../../../img/V2/page/main/partners/dpmrgim.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://rdd.design/" target="_blank"><img src="./../../../img/V2/page/main/partners/rdd.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://tkbaikalaqua.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/legendofbaikal.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="javascript://" target="_blank"><img src="./../../../img/V2/page/main/partners/k.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.rpharm.com/ru" target="_blank"><img src="./../../../img/V2/page/main/partners/farmlogo.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://vgtrk.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/vgtrk.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            генеральный телевизионный<br>
                            информационный партнер
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://tass.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/tasslogo.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            генеральное
                            информационное агенство
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://russian.rt.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/rt.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            генеральный международный<br>
                            новостной партнер
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://iz.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/izvestia.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            мультимедийный
                            информационный&nbsp;партнер
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.kp.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/kp.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            генеральный
                            информационный&nbsp;партнер
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="http://mirtv.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/mir.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            генеральный
                            информационный&nbsp;партнер
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://vk.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/vk.svg"></a>
                        <div class="partner-img__subtitle px-3">
                            официальная<br>
                            социальная сеть
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://rcw2021.moscow/" target="_blank"><img src="./../../../img/V2/page/main/partners/cam.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.novatek.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/novatek.svg"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-partners__inner">
            <div class="section-partners__content">
                <div class="row partners-stripe">
                    <div class="col-lg-3 col-md-12 col-12 partner-title">Информационные партнеры</div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.avtoradio.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/autoradio.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://rg.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/rg.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://aeroexpress.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/aeroexpress.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://rtvi.com/" target="_blank"><img src="./../../../img/V2/page/main/partners/rtvi.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://vk.com/vkclips" target="_blank"><img src="./../../../img/V2/page/main/partners/vkclips.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://adindex.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/adindex.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://ok.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/ok.svg"></a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://snob.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/snob.svg"></a>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 partner-title"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-6 partner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <a href="https://www.metronews.ru/" target="_blank"><img src="./../../../img/V2/page/main/partners/metro.svg"></a>
                    </div>
                </div>
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
                            Пресса
                        </div>
                        <div class="contacts-grid__item-desc">
                            По вопросам аккредитации, пожалуйста, свяжитесь с пресс-службой Российской креативной недели.
                        </div>
                        <div class="contacts-grid__item-link">
                            <a href="mailto:press@creativityweek.ru">press@creativityweek.ru</a>
                        </div>
                    </div>
                    <div class="contacts-grid__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="contacts-grid__item-title">
                            Вакансии
                        </div>
                        <div class="contacts-grid__item-desc">
                            Присылайте резюме<br>на электронный адрес

                        </div>
                        <div class="contacts-grid__item-link">
                            <a href="mailto:direct@creativityweek.ru">direct@creativityweek.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-subscribe" style="display: none !important;" elem-hide>
    <div class="container section-subscribe__border wow fadeIn" id="events" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div class="section-subscribe__block">
            <div subscribe-success-text style="display: none;" class="text"></div>

            <div subscribe-default class="text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <p>Подпишись на нас, будь в курсе событий!</p>
            </div>

            <div class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <form subscribe-default subscribe-form action="{{ Route('form.subscribe.store') }}" class="section-subscribe__form mt-lg-n3 mb-0">
                    @csrf
                    <input name="email" type="text" class="form-control" placeholder="your@email.com">
                    <button class="form-btn">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="24.5" stroke="#FBFBFB" />
                            <path d="M40.5051 25.3536C40.7004 25.1583 40.7004 24.8417 40.5051 24.6464L37.3231 21.4645C37.1279 21.2692 36.8113 21.2692 36.616 21.4645C36.4207 21.6597 36.4207 21.9763 36.616 22.1716L39.4444 25L36.616 27.8284C36.4207 28.0237 36.4207 28.3403 36.616 28.5355C36.8113 28.7308 37.1279 28.7308 37.3231 28.5355L40.5051 25.3536ZM9.84851 25.5H40.1515V24.5H9.84851V25.5Z" fill="#FBFBFB" />
                        </svg>
                    </button>
                    <input type="hidden" name="type" value="1">
                </form>

                <button subscribe-success-btn style="display: none;" class="btn btn-primary w-md-fit">оставить другой e-mail</button>
            </div>
        </div>
    </div>
</section>


<section class="section section-content section-programm">
    <div class="container" id="festival">
        <div class="border-top-black"></div>
        <div class="section-programm__inner">
            <div class="section-programm__columns wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="column-mobile">
                    <div class="image-column">
                        <div class="sticker sticker__right-top sticker__pink">R.C.AWARDS</div>
                        <div id="sun-sm"></div>
                    </div>
                </div>
                <div class="column-left">
                    <h2 class="section-programm__h2">
                        «Russian Creative Awards: <span class="d-lg-none d-inline"><br></span>лучшие
                        среди равных»
                    </h2>
                    <p class="section-programm__p">
                        По результатам Премии будет издан специальный сборник «Russian Creative Awards: лучшие среди равных», который будет распространяться на всех крупных мероприятиях в сфере креативных
                        индустрий России.
                    </p>
                </div>
                <div class="column-right">
                    <div class="image-column">
                        <div class="sticker sticker__right-top sticker__pink">R.C.AWARDS</div>
                        <div id="sun"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/index.js') }}"></script>
@endsection
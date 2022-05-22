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
    <div class="container" id="award">
        <div class="section-cta__inner">
            <h1 class="section-center-title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">независимый открытый конкурс в области креативных индустрий России
            </h1>
            <p class="section-center-text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">единственная кросc-отраслевая премия,
                не&nbsp;имеющая аналогов в мире
            </p>
            <a href="{{ Route('index') }}#submit" data-toggle="modal" data-target="#getMe" class="btn btn-primary">Участвовать</a>
        </div>
    </div>
</section>

<section class="section section-content section-fewspeakers">
    <div class="container" id="who">
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
    <div class="container" id="submit">
        <div class="slide-wrapper">
            <div class="slide-inner wow fadeIn">
                <div class="slide slide-new-year">
                    <div class="slide-content">
                        <h1 class="slide__title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            <span class="font-weight-700">Приём заявок начнётся
                                1&nbsp;сентября</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-content section-subscribe">
    <div class="container section-subscribe__border wow fadeIn" id="events" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div class="section-subscribe__block">
            <div subscribe-success-text style="display: none;" class="text wow fadeIn"></div>

            <div subscribe-default class="text wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <p>Подпишись на нас, будь в курсе событий!</p>
            </div>

            <div class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                <form subscribe-default subscribe-form action="" class="section-subscribe__form mt-lg-n3 mb-0">

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
@endsection

@section('scripts')
<script src="{{ mix('js/page/index.js') }}"></script>
@endsection
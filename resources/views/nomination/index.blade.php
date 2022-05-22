@extends('layouts.app')

@section('title', 'Номинация. Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/nomination/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')

<div class="section section-content section-main">
    <div class="container position-relative">
        <div class="section-main__bg">
            <picture>
                <img data-src="/img/V2/page/main/card/gradient/circle.svg" class="lazyload">
            </picture>
        </div>
        <div class="section-main__inner">
            <div class="section-main__title text-center">
                <div class="h1 text-gradient">Креативный<br>продюсер года</div>
            </div>
            <div class="section-main__arrow">
                <picture>
                    <img data-src="/img/V2/page/main/card/gradient/arrow.svg" class="lazyload">
                </picture>
            </div>
        </div>
    </div>
</div>

<section class="section section-description">
    <div class="container">
        <div class="row">
            <h2 class="section-description__title col-12  col-lg-6 col-xl-6">
                Креативный
                <br>продюсер года
            </h2>
            <div class="section-description__text col-12 col-lg-6 col-xl-6">
                <p>
                    На заре зарождения телевидения, энтузиасты считали, что оно вытеснит из жизни театры и кино. Через пару десятилетий телевизоры уже появились почти в каждом доме. Телемагнаты в разных странах пользовались чрезвычайным влиянием, рекламные бюджеты тв-компаний с большим отрывом опережали прессу и радио.
                </p>
                <p>
                    Со временем доминирование телевидения ослабло, оно заняло
                    свою нишу наряду с другими видами досуга. А теперь вынуждено конкурировать с интернетом и вновь появившимися информацион-
                    ными платформами. Некоторые люди принципиально отказываются
                    от телевизоров в доме, предпочитая получать информацию
                    в интернете, а также – смотреть фильмы и слушать музыку.
                </p>
            </div>
        </div>
    </div>
</section>

@include('block.nominate')

@include('block.indamini')

@include('block.jury')

@include('block.award')
@endsection

@section('scripts')
<script src="{{ mix('js/page/nomination.js') }}"></script>
@endsection
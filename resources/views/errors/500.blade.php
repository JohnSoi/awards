@extends('layouts.app')

@section('title', 'Ведутся технические работы - Russian Creative Awards')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/errors/500.css') }}">
@endsection

@section('content')
<section class="section section-content section-error">
    <div class="container">
        <div class="section-error__inner">
            <div class="section-error__logo">
                <img data-src="/img/V2/page/error/logo.svg" class="lazyload">
            </div>
            <div class="section-error__title text-center">Скоро включимся!</div>
            <div class="section-error__description">
                Сейчас на сайте проводятся<br>
                технические работы
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/errors.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Страница не найдена - Russian Creative Awards')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/errors/404.css') }}">
@endsection

@section('content')
<section class="section section-content section-error">
    <div class="container position-relative">
        <div class="wrap">
            <div class="title">404</div>
            <div class="subtitle">хм, мы не нашли такую страницу
                <br><a href="{{ Route('index') }}" class="backlink">На главную</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/errors.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Фотографии | Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/photos/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-photos">
    <div class="container wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" data-wow-offset="0">

        <div style="display: none;">
            @include('photos.item')
        </div>

        <div class="section-photos__grid" style="opacity: 0" items-list-photo="{{ Route('photos.index') }}"></div>

        <div items-empty-photo>
            <div class="more-text pos-more-text">Фотографий нет</div>
        </div>

        <div items-preloader-photo style="display: none;">
            <div class="more-text pos-more-text">Подождите...</div>
        </div>

        <div style="display: none;">
            <div items-show-more-photo></div>
        </div>
    </div>
</section>
@endsection

@section('modals')
@include('photos.modal')
@endsection

@section('scripts')
<script src="{{ mix('js/page/photos/index.js') }}"></script>
@endsection
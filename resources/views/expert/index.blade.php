@extends('layouts.app')

@section('title', 'Эксперты | Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/attendee/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-attendee" data-attendee data-section-attendee>
    <div class="container">
        <div class="section-attendee__inner" data-attendee>
            <h2 class="mobile-section-title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">Эксперты</h2>

            <div class="d-none">
                @include('expert.item')
            </div>

            <div class="section-attendee__content" items-list-expert="{{ Route('expert.index') }}"></div>

            <div items-empty-expert style="display: none;">
                <div class="more-text pos-more-text">Экспертов нет</div>
            </div>

            <div items-preloader-expert>
                <div class="more-text pos-more-text">Подождите...</div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modals')
@include('expert.modal')
@endsection

@section('scripts')
<script src="{{ mix('js/page/expert/index.js') }}"></script>
@endsection
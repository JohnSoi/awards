@extends('layouts.app')

@section('title', 'Новости - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/news/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-news" data-section-news>
    <div class="container">
        <div class="section-news__inner">
            <h2 class="mobile-section-title">Новости</h2>
            <div style="display: none;">
                @include('post.item', [
                'type' => 'news'
                ])
            </div>

            <div class="section-news__content" items-list-news="{{ Route('post.index') }}"></div>

            <div items-empty-news style="display: none;">
                <div class="more-text pos-more-text">Новостей нет</div>
            </div>

            <div items-preloader-news style="display: none;">
                <div class="more-text pos-more-text">Подождите...</div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/news/index.js') }}"></script>
@endsection
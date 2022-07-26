@extends('layouts.app')

@section('title', strip_tags($nomination->name))

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
            @if($nomination->title)
            <div class="section-main__title text-center">
                <div class="h1 text-gradient">{!! App::isLocale('en') ? $nomination->title_en : $nomination->title !!}</div>
            </div>
            @endif
            <div class="section-main__arrow">
                <picture>
                    <img data-src="/img/V2/page/main/card/gradient/arrow.svg" class="lazyload">
                </picture>
            </div>
        </div>
    </div>
</div>

@if($nomination->about)
<section class="section section-description">
    <div class="container">
        <div class="row">
            <h2 class="section-description__title col-12  col-lg-6 col-xl-6">
                {{ App::isLocale('en') ? 'About nomination' : 'О номинации' }}
            </h2>
            <div class="section-description__text col-12 col-lg-6 col-xl-6">{!! App::isLocale('en') ? $nomination->about_en : $nomination->about !!}</div>
        </div>
    </div>
</section>
@endif

@if(count($projects))
@include('nomination.collapse')
@endif

@include('block.step', [
'href' => true
])

@endsection

@section('modals')
<!-- модалка фоток -->
<div class="modal photo-modal fade" id="getPhoto">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="photo-place">
                    <img>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('js/page/nomination/show.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/competition/index.css') }}">
<link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
<link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">

<!-- disabled phone numbers -->
<meta name="format-detection" content="telephone=no">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-main">
    <div class="conic-gradient"></div>
    <div class="postmark-position animated-marks container">

    </div>
    <div class="postmark-position notanimated-marks container">

    </div>
    <div class="container first-container">
        <div class="slide-wrapper">
            <div class="slide-inner">
                <div class="slide slide-dark mt-md-n4 mt-sm-n4 mt-n3">
                    <div class="slide-content">
                        <h1 class="slide__title">
                            <span class="font-weight-300 text-white">Russian</span><br>
                            <span class="font-weight-700 text-semipink">Creative<br>Awards</span><br>
                            <span class="font-weight-700 text-semipink">
                                {{(Request::url() === Route('index')) ? '2022' : '2021' }}
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="award-symbol wow " data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
            <img data-src="{{ mix('/page_image/award-symbol.png') }}" class=" ls-is-cached lazyloaded" src="{{ mix('/page_image/award-symbol.png') }}">
        </div>
    </div>

    <svg fill="none" xmlns="http://www.w3.org/2000/svg" style="opacity: 0; visibility: hidden; position:absolute; bottom: 0; left: 0; z-index: -1;">
        <defs>
            <linearGradient id="gray-gradient" x1="184.619" y1="53.0393" x2="12.1039" y2="70.0247" gradientUnits="userSpaceOnUse">
                <stop offset="0.25" stop-color="#A8A8A8" />
                <stop offset="1" stop-color="white" />
            </linearGradient>
        </defs>
    </svg>
</section>
<section class="section section-content section-cta new-main">
    <div class="container">
        <div class="section-cta__inner">
            <h2 style="margin-top: 30px;" class="section-center-title text-semipink mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">{{__('main.main_tagline1')}} <br>{{__('main.main_tagline2')}} <br>{{__('main.main_tagline3')}}
            </h2>
            <a href="#submit" class="btn btn-white-primary mt-5">{{__('main.main_Participate')}}</a>
        </div>
    </div>
</section>

@include('block.for')

<!-- section fewspeakers -->

<!-- section new-year -->

@include('block.step')
@include('block.incards')

@include('block.nominations')



<section class="section section-content section-themes black-block new-main">
    <div class="container section-themes__new wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0" id="award">
        <div class="border-top-white"></div>
        <h2 class="section-title mb-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                R.C.AWARDS 2022
        </h2>
        <div class="section-themes__content">
            <div class="objects-wrapper">
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="object-item object-item__bg-transparent object-item__bordered object-item__circle">
                        <div class="object-item__suptitle">3000+</div>
                        <div class="object-item__subtitle">{{__('main.rcInfo1')}}</div>
                    </div>
                </div>
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="object-item object-item__bg-white object-item__bordered">
                        <div class="object-item__suptitle">100+</div>
                        <div class="object-item__subtitle">{{__('main.rcInfo2')}}</div>
                    </div>
                </div>
                <div class="object-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
                    <div class="object-item object-item__bg-gray object-item__circle">
                        <div class="object-item__suptitle">10</div>
                        <div class="object-item__subtitle">
                            {{__('main.rcInfo3')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('block.history')

@include('block.faq')

{{--@include('block.nominate')--}}

@include('block.indamini')

@include('block.jury')

@include('block.expert')


@include('block.partners')

@include('forms.form_wrapper')
@include('block.contacts')

@endsection

@section('modals')

    <!-- модалка видоса -->
<div class="modal video-modal fade" id="getVideo" tabindex="-1" aria-labelledby="getVideoLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 30 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule=" evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="video-iframe">
                    <iframe src="https://vk.com/video_ext.php?oid=-207545557&id=456239019&hash=c3a8f0f439fc7b1e&hd=1" width="640" height="360" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.buttonScrollTop')

@include('photos.modal')
@endsection

@section('scripts')
    <script src="{{ mix('js/page/competition.js') }}"></script>
    <script src="{{ mix('js/page/dark.js') }}"></script>
    <script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Конкурс. Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/competition/index.css') }}">
@endsection

@section('body-class', 'body--white')

@section('content')
<section class="section section-content section-newyear new-main">
    <div class="container">
        <div class="slide-wrapper">
            <div class="slide-inner wow fadeIn">
                <div class="slide slide-new-year">
                    <div class="slide-content">
                        <h4 class="slide__title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                            <span class="font-weight-700">{{__('main.com_span1')}}&nbsp;{{__('main.com_span2')}}</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('block.step')

@include('block.incards')

@include('block.nominations')

@include('block.service')

@include('block.history')

@include('block.faq')

@include('forms.form_wrapper')

@include('block.partners')

@include('components.buttonScrollTop')

@endsection

@section('scripts')
<script src="{{ mix('js/page/competition.js') }}"></script>
<script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection
@extends('layouts.app')

@section('title', 'Пользовательское соглашение - Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/agreement/index.css') }}">

<!-- disabled phone numbers -->
<meta name="format-detection" content="telephone=no">
@endsection

@section('content')
<section class="section section-content section-agreement">
    <div class="container">
        <div class="section-agreement__inner">
            <div class="border-top-black"></div>
            <div class="section-agreement__title">
                <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Документы</h2>
            </div>
            <div class="section-agreement__content">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <a href="{{ Route('agreement.accord') }}" target="_blank" class="card card-themes white card-doc w-100 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30" title="РКС сайт согласие (docx)">
                            <div class="card-themes__title">
                                <div class="bg_point bg-pink"></div>
                                <span class="text">Обработка персональных данных</span>
                            </div>
                            <span class="download-link">Скачать</span>
                        </a>
                    </div>
                    <div class="col-md-6 col-12">
                        <a href="{{ Route('agreement.privacy') }}" target="_blank" class="card card-themes black card-doc w-100 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30" title="Политика конфидециальности (docx)">
                            <div class="card-themes__title">
                                <div class="bg_point bg-lightblue"></div>
                                <span class="text">Политика конфидециальности</span>
                            </div>
                            <span class="download-link">Скачать</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/form2.js') }}"></script>
@endsection
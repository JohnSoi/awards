@extends('layouts.app')

@section('title', 'Страница оценки проекта - Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/evaluation/process/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-navigation">
    <div class="container">
        <div class="section-navigation__inner">
            <a href="{{ $url_previous }}" class="back-btn back-btn__left">Назад</a>
        </div>
    </div>
</section>

<section class="section section-content section-process">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                @if($project->name_nominate)
                <div class="section-process__title">{{ $project->name_nominate }}</div>
                @endif
                @if($project->nomination)
                <div class="section-process__nomination">
                    <div class="nomination-card bg-pink">
                        <div class="nomination-card__title">Номинация: {{ $project->nomination->name }}</div>
                        <div class="nomination-card__desc">{{ $project->nomination->description }}</div>
                    </div>
                </div>
                @endif
                <div class="section-process__score d-lg-flex d-none">
                    @include('evaluation.block.score')
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="section-process__info">
                    <div class="row">
                        @if($project->geography)
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="evaluation-textblock">
                                <div class="evaluation-textblock__title">География</div>
                                <div class="evaluation-textblock__description opacity-70">{{ $project->geography }}</div>
                            </div>
                        </div>
                        @endif
                        @if($project->presentation)
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="evaluation-textblock">
                                <div class="evaluation-textblock__title">Презентация</div>
                                <div class="evaluation-textblock__description opacity-70"><a href="{{ $project->presentation }}" target="_blank" class="link">Скачать презентацию</a></div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="section-process__info">
                    <div class="row">
                        @if($project->deposit)
                        <div class="col-12">
                            <div class="evaluation-textblock overflow-hidden">
                                <div class="evaluation-textblock__title">Вклад в развитие КИ</div>
                                <div class="evaluation-textblock__description white-space-prewrap opacity-70">{{ $project->deposit }}</div>
                            </div>
                        </div>
                        @endif
                        @if($project->unique)
                        <div class="col-12">
                            <div class="evaluation-textblock overflow-hidden">
                                <div class="evaluation-textblock__title">Уникальность, инновационность</div>
                                <div class="evaluation-textblock__description white-space-prewrap opacity-70">{{ $project->unique }}</div>
                            </div>
                        </div>
                        @endif
                        @if($project->why_worthy)
                        <div class="col-12">
                            <div class="evaluation-textblock overflow-hidden">
                                <div class="evaluation-textblock__title">Почему достоин признания/награды</div>
                                <div class="evaluation-textblock__description white-space-prewrap opacity-70">{{ $project->why_worthy }}</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="section-process__score d-lg-none d-flex">
                    @include('evaluation.block.score')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('modals')
<!-- Успешная оценка -->
<div class="modal notify-modal fade" id="modalSuccess">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-4">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 39 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="title-notify"></div>
                <p class="text-notify">Спасибо, ваша <br>оценка отправлена!</p>
            </div>
            <div class="modal-footer h-auto">
                <a href="{{ Route('evaluation.process') }}" class="close-notify font-weight-bold border-bottom">Следующий номинируемый</a>
                <a href="{{ Route('evaluation.projects') }}" class="close-notify font-weight-normal">Список номинируемых</a>
            </div>
        </div>
    </div>
</div>

<!-- Изменение оценки -->
<div class="modal notify-modal fade" id="modalScore">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header mb-4">
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 39 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="title-notify"></div>
                <p class="text-notify">Ваша <br>оценка изменена!</p>
            </div>
            <div class="modal-footer h-auto">
                <a href="{{ Route('evaluation.index') }}" class="close-notify" data-btn>На главную</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('js/page/evaluation/process.js') }}"></script>
@endsection
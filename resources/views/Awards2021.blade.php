@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/photos/index.css') }}">
@endsection

@section('content')
    <div style="margin-top: 50px;"></div>
    @include('block.photos')
    @include('block.jury')
    @include('block.expert')
    @include('block.service')
    @include('block.nominate')
    @include('block.award')
    @include('block.partners')
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

    @include('photos.modal')
@endsection

@section('scripts')
    <script src="{{ mix('js/page/competition.js') }}"></script>
    <script src="{{ mix('js/page/form/index.js') }}"></script>
    <script src="{{ mix('js/page/dark.js') }}"></script>
@endsection
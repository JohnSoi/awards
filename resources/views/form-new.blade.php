@extends('layouts.app')
@section('title', 'Подача заявки')
@section('content')
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">
    <div class="container section-submit" style="margin-top: 100px; margin-bottom: 100px;">
    @if(!(bool)$_GET['organization'])
        @include('individual')
    @else
        @include('entity')
    @endif
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/page/competition.js') }}"></script>
    <script src="{{ mix('js/page/dark.js') }}"></script>
    <script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection

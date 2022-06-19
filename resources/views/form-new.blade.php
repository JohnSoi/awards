@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('content')
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    @if(!(bool)$_GET['organization'])
        @include('individual')
    @else
        @include('entity')
    @endif
    </div>
@endsection

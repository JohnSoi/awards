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
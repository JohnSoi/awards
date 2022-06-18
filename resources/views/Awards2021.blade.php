@extends('layouts.app')

@section('content')
    <div style="margin-top: 50px;"></div>
    @include('block.photos')
    @include('block.jury')
    @include('block.expert')
    @include('block.service')
    @include('block.photos')
    @include('block.nominate')
    @include('block.partners')
@endsection
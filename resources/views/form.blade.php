@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">

<!-- disabled phone numbers -->
<meta name="format-detection" content="telephone=no">
@endsection

@section('content')
@include('block.form')
@endsection

@section('scripts')
<script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection
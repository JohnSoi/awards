@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/competition/index.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">

    <!-- disabled phone numbers -->
    <meta name="format-detection" content="telephone=no">
@endsection

@section('content')
<div class="container verify-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите свою почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Письмо уже было отправлено на Вашу почту') }}
                        </div>
                    @endif

                    {{ __('Перед выполнением действия, пожалуйста, проверьте
                            свою почту на сообщение со ссылкой на подтверждение.') }}
                    {{ __('Если его нет, проверьте папку "Спам" или ') }}
                    <form class="d-inline" method="GET" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('запросите повторную отправку') }}</button>.
                    </form>
                    {{ __('Если почта подтверждена - ') }} <a href="/lk">{{ __('Перейдите в личный кабинет') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



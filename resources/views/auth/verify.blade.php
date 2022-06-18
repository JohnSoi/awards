@extends('layouts.app')

@section('content')
<div class="container">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

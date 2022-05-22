@extends('layouts.app')

@section('title', 'Восстановление пароля - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
<Script>
    var email = '{{ $email }}';
</script>
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-auth">
    <form id="passwordResetForm" action="{{ route('password.update') }}" class="container">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="title text-center">
            <h1 class="h1 form__title forgot-h1 mb-0">Восстановление пароля</h1>
        </div>
        <div class="description text-center">
            <p>Придумайте новый надёжный пароль</p>
        </div>
        <div class="auth-form register-grid">
            <div class="form-types">
                <label class="form-type-label">Пароль</label>
                <input name="password" type="password" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Повторите пароль</label>
                <input name="password_confirmation" type="password" class="form-type-text" required>
            </div>
        </div>
        <div class="btns-area">
            <button class="btn btn-white-primary w-100 opacity-50">Отправить</button>
        </div>
        <div class="footer-area text-center">
            <a href="{{ Route('login') }}" class="font-weight-700 text-decoration-none text-uppercase"><span>Назад</span></a>
        </div>
    </form>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/auth/passwords/reset.js') }}"></script>
@endsection
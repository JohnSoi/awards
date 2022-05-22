@extends('layouts.app')

@section('title', 'Авторизация - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-auth">
    <div class="form--dark container">
        <form id="loginForm" action="{{ Route('login') }}" class="form">
            @csrf
            <input type="hidden" name="remember" value="1">
            <h1 class="form__title">Вход</h1>
            <p class="form__description">
                В личном кабинете вы&nbsp;можете&nbsp;оценивать
                заявки Russian&nbsp;Creative&nbsp;Awards
            </p>
            <div class="auth-form login-grid">
                <div class="form-types">
                    <label class="form-type-label">E-mail</label>
                    <input name="email" type="email" class="form-type-text" required>
                </div>
                <div class="form-types">
                    <label class="form-type-label">Пароль</label>
                    <input name="password" type="password" autocomplete="current-password" class="form-type-text" required>
                </div>
            </div>
            <div class="forgot-area">
                <a href="{{ route('password.request') }}" class="forgot-link">Забыли пароль?</a>
            </div>
            <div class="btns-area">
                <button class="btn btn-white-primary w-100 opacity-50">Войти</button>
            </div>
        </form>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/auth/login.js') }}"></script>
@endsection
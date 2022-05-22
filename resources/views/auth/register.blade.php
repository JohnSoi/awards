@extends('layouts.app')

@section('title', 'Регистрация - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-auth">
    <form id="registerForm" action="{{ Route('register') }}" class="form form--dark container">
        @csrf
        <h1 class="form__title">Регистрация</h1>
        <p class="form__description">Для участия в мероприятиях Российской креативной неделe, пожалуйста, заполните
            данные в форме ниже.</p>
        <div class="auth-form register-grid">
            <div class="form-types">
                <label class="form-type-label">ФИО</label>
                <input name="name" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Город</label>
                <input name="city" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">E-mail</label>
                <input name="email" type="email" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Пароль</label>
                <input name="password" type="password" class="form-type-text" autocomplete="current-password" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Повторите пароль</label>
                <input name="password_confirmation" type="password" class="form-type-text" autocomplete="current-password" required>
            </div>
        </div>
        <div class="btns-area">
            <button class="btn btn-white-primary w-100 opacity-50">Зарегистрируйтесь</button>
        </div>
        <div class="footer-area text-center mb-4">
            <a href="{{ Route('agreement.index') }}" class="forgot-link" target="_blank">Нажимая на кнопку, вы даете согласие ➝</a>
        </div>
        <div class="footer-area text-center">
            <span class="font-weight-300">Есть аккаунт?</span>
            <a href="{{ Route('login') }}" class="font-weight-700 text-decoration-none">Войти</span></a>
        </div>
    </form>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/auth/register.js') }}"></script>
@endsection
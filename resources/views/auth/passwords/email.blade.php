@extends('layouts.app')

@section('title', 'Восстановление пароля - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-auth">
    <form id="passwordEmailForm" action="{{ route('password.email') }}" class="container">
        @csrf

        <div class="title text-center">
            <h1 class="h1 form__title forgot-h1 mb-0">Восстановление пароля</h1>
        </div>
        <div class="description text-center">
            <p>Введите электронный адрес, на который зарегистрирован аккаунт. Мы вышлем письмо с паролем для восстановления.</p>
        </div>
        <div class="auth-form register-grid">
            <div class="form-types">
                <label class="form-type-label">E-mail</label>
                <input name="email" type="text" class="form-type-text" required>
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

@section('modal')
<!-- popup восстановление пароля -->
<div class="modal reset-modal fade" id="resetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <p class="text-center">
                    Письмо с ссылкой для восстановления успешно отправлено на <b>katyanikitina.me@yandex.ru</b>
                </p>
            </div>
            <div class="modal-footer">
                <a href="javascript://" class="close-notify" data-dismiss="modal" aria-label="Close">Закрыть</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('js/page/auth/passwords/email.js') }}"></script>
@endsection
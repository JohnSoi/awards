@extends('layouts.app')

@section('title', 'Регистрация - Российская креативная неделя (Russian Creative Week)')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)
@section('content')
    <div class="reg-block" id="reg-block" style="display: none">
        <section class="section section-content section-auth">
            <form id="registerForm" action="{{ Route('register_process') }}" method="post" class="form form--dark container">
                @csrf
                <h1 class="form__title">Регистрация</h1>
                <p class="form__description">Для участия в мероприятиях Российской креативной недели, пожалуйста,
                    заполните
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
                        <input name="password" type="password" class="form-type-text" autocomplete="current-password"
                               required>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Повторите пароль</label>
                        <input name="password_confirmation" type="password" class="form-type-text"
                               autocomplete="current-password" required>
                    </div>
                </div>
                <div class="btns-area">
                    <button class="btn btn-white-primary w-100 opacity-50" >Зарегистрируйтесь</button>
                </div>
                <div class="footer-area text-center mb-4">
                    <a href="{{ Route('agreement.index') }}" class="forgot-link" target="_blank">Нажимая на кнопку, вы
                        даете согласие ➝</a>
                </div>
                <div class="footer-area text-center">
                    <span class="font-weight-300">Есть аккаунт?</span>
                    <a href="#" class="font-weight-700 text-decoration-none" id="regis-mane-id">Войти</span></a>
                </div>
            </form>
        </section>
    </div>
    <div class="login-block" id="login-block" style="display: block">
        <section class="section section-content section-auth">
            <div class="form--dark container">
                <form id="loginForm" action="{{ Route('login') }}" class="form">
                    @csrf
                    <input type="hidden" name="remember" value="1">
                    <h1 class="form__title">Вход</h1>
                    <p class="form__description">
                        В личном кабинете вы&nbsp;можете&nbsp;создавать и редактировать
                        заявки Russian&nbsp;Creative&nbsp;Awards
                    </p>
                    <div class="auth-form login-grid">
                        <div class="form-types">
                            <label class="form-type-label">E-mail</label>
                            <input name="email" type="email" class="form-type-text" required>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Пароль</label>
                            <input name="password" type="password" autocomplete="current-password"
                                   class="form-type-text" required>
                        </div>
                    </div>
                    <div class="forgot-area">
                        <a href="{{ route('password.request') }}" class="forgot-link">Забыли пароль?</a>
                    </div>
                    <div class="btns-area">
                        <button class="btn btn-white-primary w-100 opacity-50">Войти</button>
                        <div class="btn btn-white-primary w-100 opacity-50" id="login-block-back" style="margin-top: 10px;">Еще нет аккаунта?</div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/reg.js')}}"></script>
    <script src="{{ asset('js/page/auth/register.js') }}"></script>
    <script src="{{ asset('js/page/auth/login.js') }}"></script>
@endsection
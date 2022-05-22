@extends('layouts.app')

@section('title', 'Выбор индустрий - Российская креативная неделя (Russian Creative Week)')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/auth/index.css') }}">
@endsection

@section('body-class', 'body--dark')
@section('isDark', true)

@section('content')
<section class="section section-content section-auth">
    <form class="container form-labels">
        <div class="description text-center">
            <p>Отметьте те индустрии, которые вам интересны. Мы&nbsp;будем предлагать мероприятия на их основе.</p>
        </div>
        <fieldset>
            <div class="form-group form-labels__btns">
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-2" name="type_id" value="1" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-2">Все</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-3" name="type_id" value="2" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-3">Телевидение</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-4" name="type_id" value="3" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-4">Мода</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-5" name="type_id" value="4" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-5">Новые медиа</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-1" name="type_id" value="5" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-1">Компьютерная графика</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-2" name="type_id" value="1" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-2">Архитектура и урбанистика</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-3" name="type_id" value="2" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-3">Искусство</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-4" name="type_id" value="3" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-4">Кино</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-5" name="type_id" value="4" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-5">Музыка и саунд-дизайн</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-1" name="type_id" value="5" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-1">Образование</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-5" name="type_id" value="4" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-5">Разработка игр</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-1" name="type_id" value="5" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-1">IT</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-5" name="type_id" value="4" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-5">Маркетинг</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-1" name="type_id" value="5" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-1">Журналистика</label>
                </div>
                <div class="form-labels__btn">
                    <input type="checkbox" id="fieldset-3-5" name="type_id" value="4" class="custom-control-input">
                    <label class="white-label" for="fieldset-3-5">Дизайн</label>
                </div>
            </div>
        </fieldset>
        <div class="btns-area">
            <a href="javascript://" class="btn btn-white-primary w-100">Подтвердить</a>
        </div>
    </form>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/auth/confirm.js') }}"></script>
@endsection
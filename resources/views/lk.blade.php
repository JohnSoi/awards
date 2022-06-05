@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <!-- disabled phone numbers -->
    <meta name="format-detection" content="telephone=no">
@endsection
@section('body-class', 'body--dark')
@section('isDark', true)
@section('content')
    <section class="section section-content section-submit section-lk">
        <div class="container" id="submit">
            <div class="section-submit__preheader">
                <div class="ua">
                    <div class="ua-mane">
                        <div class="ua-mane-info">
                            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                                data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">
                                Участник</h4>
                            <div class="ua-mane-info-block">
                                <h4>Name</h4>
                                <h5>E-mail</h5>
                            </div>
                        </div>
                        <div class="ua-mane-request">
                            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                                data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">
                                Список заявок участинка</h4>
                            <div class="ua-mane-request-item">
                                <h3 class="ua-mane-request-item-num">
                                    Заявка: 1
                                </h3>
                                <div class="ua-mane-request-item-num-mane">
                                    <div class="ua-mane-request-item-first-block">
                                        <p class="ua-request-item-num-smt">ФИО номинуемого: <p
                                                    class="ua-mane-request-item-p">Иванов Иван Иванович</p></p>
                                        <img src="" alt="" class="ua-request-item-num-img">
                                        <p class="ua-request-item-num">Биография номинуемого: <span class="ua-mane-request-item-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt doloribus illo maiores mollitia qui sit temporibus ut vitae voluptas voluptatibus? Atque doloribus eligendi enim excepturi laboriosam, odit provident quibusdam ullam!</span></p>
                                    </div>
                                    <div class="ua-mane-request-item-second-block">
                                    <p class="ua-request-item-num-smt">Номинация: <span
                                                    class="ua-mane-request-item-span">Физика</span></p>
                                        <p class="ua-request-item-num-smt">Индустрия: <span
                                                    class="ua-mane-request-item-span">Учеба</span></p>
                                        <p class="ua-request-item-num-smt">Место работы: <span
                                                    class="ua-mane-request-item-span">Школа</span></p>
                                        <p class="ua-request-item-num-smt">Должность: <span
                                                    class="ua-mane-request-item-span">Учитель труда</span></p>
                                        <p class="ua-request-item-num-smt">Регион номинуемого: <span
                                                    class="ua-mane-request-item-span">Уфа</span></p>
                                        <p class="ua-request-item-num-smt">Достижения в 2021-2022: <span
                                                    class="ua-mane-request-item-span">Купил приору</span></p>
                                        <p class="ua-request-item-num-smt">Показатели медиа охвата: <span
                                                    class="ua-mane-request-item-span">100 друзей в ВК</span></p>
                                        <p class="ua-request-item-num-smt">Почему достоин награды: <span
                                                    class="ua-mane-request-item-span">АААААААА</span></p>
                                        <p class="ua-request-item-num-smt">Имеющиеся награды, степени и т.п.: <span
                                                    class="ua-mane-request-item-span">Доктор наук</span></p>
                                        <p class="ua-request-item-num-smt">E-mail: <span
                                                    class="ua-mane-request-item-span">name@name.ru</span></p>
                                        <p class="ua-request-item-num-smt">Соцести: <span
                                                    class="ua-mane-request-item-span">vk/krutoiEblan2008</span></p>
                                        <p class="ua-request-item-num-smt">Ссылки на контент о номинанте: <span class="ua-mane-request-item-span">/asfa/asdg/dsagsd/</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="ua-mane-request-item">
                                <h3 class="ua-mane-request-item-num">
                                    Заявка: 2
                                </h3>
                                <div class="ua-mane-request-item-num-mane">
                                    <div class="ua-mane-request-item-first-block">
                                        <p class="ua-request-item-num-smt">ФИО номинуемого: <p
                                                class="ua-mane-request-item-p">Иванов Иван Иванович</p></p>
                                        <img src="" alt="" class="ua-request-item-num-img">
                                        <p class="ua-request-item-num">Биография номинуемого: <span class="ua-mane-request-item-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt doloribus illo maiores mollitia qui sit temporibus ut vitae voluptas voluptatibus? Atque doloribus eligendi enim excepturi laboriosam, odit provident quibusdam ullam!</span></p>
                                    </div>
                                    <div class="ua-mane-request-item-second-block">
                                        <p class="ua-request-item-num-smt">Номинация: <span
                                                    class="ua-mane-request-item-span">Физика</span></p>
                                        <p class="ua-request-item-num-smt">Индустрия: <span
                                                    class="ua-mane-request-item-span">Учеба</span></p>
                                        <p class="ua-request-item-num-smt">Место работы: <span
                                                    class="ua-mane-request-item-span">Школа</span></p>
                                        <p class="ua-request-item-num-smt">Должность: <span
                                                    class="ua-mane-request-item-span">Учитель труда</span></p>
                                        <p class="ua-request-item-num-smt">Регион номинуемого: <span
                                                    class="ua-mane-request-item-span">Уфа</span></p>
                                        <p class="ua-request-item-num-smt">Достижения в 2021-2022: <span
                                                    class="ua-mane-request-item-span">Купил приору</span></p>
                                        <p class="ua-request-item-num-smt">Показатели медиа охвата: <span
                                                    class="ua-mane-request-item-span">100 друзей в ВК</span></p>
                                        <p class="ua-request-item-num-smt">Почему достоин награды: <span
                                                    class="ua-mane-request-item-span">АААААААА</span></p>
                                        <p class="ua-request-item-num-smt">Имеющиеся награды, степени и т.п.: <span
                                                    class="ua-mane-request-item-span">Доктор наук</span></p>
                                        <p class="ua-request-item-num-smt">E-mail: <span
                                                    class="ua-mane-request-item-span">name@name.ru</span></p>
                                        <p class="ua-request-item-num-smt">Соцести: <span
                                                    class="ua-mane-request-item-span">vk/krutoiEblan2008</span></p>
                                        <p class="ua-request-item-num-smt">Ссылки на контент о номинанте: <span class="ua-mane-request-item-span">/asfa/asdg/dsagsd/</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
{{--    <hr style="padding: 0; margin: 0 auto;">--}}
@endsection
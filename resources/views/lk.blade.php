@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/page/dark.css') }}">
    <meta name="format-detection" content="telephone=no">
@endsection
@section('body-class', 'body--dark')
@section('isDark', true)
@section('content')
    @php
        $user = auth()->user();
    @endphp
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
                                <h4 class="ua-mane-info-block-name">{{$user->name}}</h4>
                                <h5 class="ua-mane-info-block-email">{{$user->email}}</h5>
                                <a href="{{Route('logout')}}" class="ua-mane-info-block-logout">ВЫЙТИ</a>
                            </div>
                        </div>
                        <div class="ua-mane-request">
                            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                                data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">
                                Список заявок участинка</h4>
                            @php
                                $numReq = 0;
                            @endphp
                            @foreach($request as $req)
                                @php
                                $numReq++;
                                @endphp
                            <div class="ua-mane-request-item">
                                <h3 class="ua-mane-request-item-num">
                                    Заявка: {!! $numReq !!}
                                </h3>
                                <div class="ua-mane-request-item-num-mane">
                                    <div class="ua-mane-request-item-first-block">
                                        <p class="ua-request-item-num-smt">ФИО номинуемого:
                                        <p
                                                class="ua-mane-request-item-p">{{$req->name}}</p></p>
                                        <img src="" alt="" class="ua-request-item-num-img">
                                        <p class="ua-request-item-num">Биография номинуемого: <span
                                                    class="ua-mane-request-item-p">{{$req->bio}}</span>
                                        </p>
                                    </div>
                                    <div class="ua-mane-request-item-second-block">
                                        <p class="ua-request-item-num-smt">Номинация: <span
                                                    class="ua-mane-request-item-span">{{$req->nomination_id}}</span></p>
                                        <p class="ua-request-item-num-smt">Индустрия: <span
                                                    class="ua-mane-request-item-span">{{$req->industry_id}}</span></p>
                                        <p class="ua-request-item-num-smt">Место работы: <span
                                                    class="ua-mane-request-item-span">{{$req->job}}</span></p>
                                        <p class="ua-request-item-num-smt">Должность: <span
                                                    class="ua-mane-request-item-span">{{$req->job_title}}</span></p>
                                        <p class="ua-request-item-num-smt">Регион номинуемого: <span
                                                    class="ua-mane-request-item-span">{{$req->location}}</span></p>
                                        <p  class="ua-request-item-num-smt">Достижения в 2021-2022: <span
                                                    class="ua-mane-request-item-span">{{$req->achievements}}</span></p>
                                        <p class="ua-request-item-num-smt">Показатели медиа охвата: <span
                                                    class="ua-mane-request-item-span">{{$req->media}}</span></p>
                                        <p class="ua-request-item-num-smt">Почему достоин награды: <span
                                                    class="ua-mane-request-item-span">{{$req->why_worthy}}</span></p>
                                        <p class="ua-request-item-num-smt">Имеющиеся награды, степени и т.п.: <span
                                                    class="ua-mane-request-item-span">{{$req->awards}}</span></p>
                                        <p class="ua-request-item-num-smt">E-mail: <span
                                                    class="ua-mane-request-item-span">{{$req->email}}</span></p>
                                        <p class="ua-request-item-num-smt">Ссылки на контент о номинанте: <span
                                                    class="ua-mane-request-item-span">{{$req->social_network}}</span></p>
                                        <p class="ua-request-item-num-smt">Презентация: <span
                                                    class="ua-mane-request-item-span">{{$req->presentation}}</span></p>
                                        <a href="{{url('lk/edit_individual/'.$req->id)}}" class="ua-mane-request-item-link">РЕДАКТИРОВАТЬ</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
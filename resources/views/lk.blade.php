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
    @php
        $user = auth()->user();
    @endphp
    <section class="section section-content section-submit section-lk">
        <div class="container" id="submit">
            <div class="section-submit__preheader">

                <div class="user-kab">
                    <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                        data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">
                        Список заявок участинка</h4>
                    <div class="user-kab-registry">
                        @php
                            $numReq = 0;
                        @endphp
                        @foreach($request as $req)
                            @php
                                $numReq++;
                            @endphp
                            <div class="user-kab-registry-item">
                                <div class="user-kab-registry-item-info">
                                    <div class="user-kab-registry-item-num">№: {{$numReq}} </div>

                                    <div class="user-kab-registry-item-info">{{$req->nomination->name}}</div>
                                    <div class="user-kab-registry-item-info">{{$req->industry->name}}</div>
                                    <div class="user-kab-registry-item-info">{{$req->region->name}}</div>
                                    @if($req->organization_name !== null)
                                        <div class="user-kab-registry-item-info">{{$req->organization_name}}</div>
                                    @else
                                        <div class="user-kab-registry-item-info">{{$req->name_nominate}}</div>
                                    @endif
                                    <div class="user-kab-registry-item-info">{{$req->created_at}}</div>
                                    <a href="{{url('lk/edit_individual/'.$req->id)}}" class="user-kab-registry-item-info-link">Редактировать</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--                <div class="ua">--}}
                {{--                    <div class="ua-mane">--}}

                {{--                        <div class="ua-mane-info">--}}
                {{--                            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"--}}
                {{--                                data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">--}}
                {{--                                Участник</h4>--}}
                {{--                            <div class="ua-mane-info-block">--}}
                {{--                                <h4 class="ua-mane-info-block-name">{{$user->name}}</h4>--}}
                {{--                                <h5 class="ua-mane-info-block-email">{{$user->email}}</h5>--}}
                {{--                                <a href="{{Route('user_logout')}}" class="ua-mane-info-block-logout">ВЫЙТИ</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="ua-mane-request">--}}
                {{--                            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"--}}
                {{--                                data-wow-offset="0" style="text-align:center; margin-bottom: 50px;">--}}
                {{--                                Список заявок участинка</h4>--}}
                {{--                            <div class="ua-mane-request-item">--}}
                {{--                                @php--}}
                {{--                                    $numReq = 0;--}}
                {{--                                @endphp--}}
                {{--                                @foreach($request as $req)--}}
                {{--                                    @php--}}
                {{--                                        $numReq++;--}}
                {{--                                    @endphp--}}
                {{--                            <div class="ua-mane-request-item-str">--}}
                {{--                                <div class="ua-mane-request-item-str-wares">--}}
                {{--                                    <span>Имя: {{$req->name_nominate}}</span>--}}
                {{--                                    <span>Номинация: {{$req->nomination->name}}</span>--}}
                {{--                                    <span>Индустрия: {{$req->industry->name}}</span>--}}
                {{--                                    <span>Регион: {{$req->region->name}}</span>--}}
                {{--                                    <span>Дата создания: {{$req->created_at}}</span>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                                            <td>{{$req->name_nominate}}</td>--}}
                {{--                                            <td>{{$req->nomination->name}}</td>--}}
                {{--                                            <td>{{$req->industry->name}}</td>--}}
                {{--                                            <td>{{$req->region->name}}</td>--}}
                {{--                                            <td>{{$req->email_nominee}}</td>--}}
                {{--                                            <td>{{$req->created_at}}</td>--}}

                {{--                                <h3 class="ua-mane-request-item-num" style="margin-top: 40px;">--}}
                {{--                                    Заявка: {!! $numReq !!}--}}
                {{--                                </h3>--}}
                {{--                                <div class="ua-mane-request-item-num-mane">--}}
                {{--                                    <div class="ua-mane-request-item-first-block">--}}
                {{--                                        <p class="ua-request-item-num-smt">ФИО номинуемого:--}}
                {{--                                        <span>--}}
                {{--                                                class="ua-mane-request-item-p">{{$req->name}}</span></p>--}}
                {{--                                        <img src="" alt="" class="ua-request-item-num-img">--}}

                {{--                                    </div>--}}
                {{--                                    <div class="ua-mane-request-item-second-block">--}}

                {{--                                        <p class="ua-request-item-num-smt">Номинация: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->nomination->name}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Индустрия: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->industry->name}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Место работы: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->job}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Должность: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->job_title}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Регион номинуемого: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->region->name}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Достижения в 2021-2022: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->achievements}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num">Биография номинуемого: <span--}}
                {{--                                                    class="ua-mane-request-item-p">{{$req->bio}}</span>--}}
                {{--                                        </p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Показатели медиа охвата: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->media}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Почему достоин награды: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->why_worthy}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Имеющиеся награды, степени и т.п.: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->awards}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">E-mail: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->email_nominee}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Ссылки на контент о номинанте: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->social_url}}</span></p>--}}
                {{--                                        <p class="ua-request-item-num-smt">Презентация: <span--}}
                {{--                                                    class="ua-mane-request-item-span">{{$req->presentation}}</span></p>--}}
                {{--                                        <div class="ua-mane-request-item-img">--}}
                {{--                                            <img src="{{$req->image}}" alt="" class="ua-mane-request-item-img-content">--}}
                {{--                                        </div>--}}
                {{--                                        <a href="{{url('lk/edit_individual/'.$req->id)}}" class="ua-mane-request-item-link">РЕДАКТИРОВАТЬ</a>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            @endforeach--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    </section>
    {{--    <hr style="padding: 0; margin: 0 auto;">--}}
@endsection
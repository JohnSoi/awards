@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/evaluation/index.css') }}">
@endsection

@section('content')
<section class="section section-content section-evaluation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                @if($user->group)
                <div class="section-evaluation__title-small">{{ $user->group->name }}</div>
                @endif
                <div class="section-evaluation__title">{{ $user->name }}</div>
                @if($user->group_id == 4)
                <!-- <div class="section-evaluation__uplink" ajax-elem>
                    @if($user->photo)
                    <a target="_blank" href="{{ $user->photo }}" class="link">Ваша фотография</a> <span data-photo-delete>Удалить</span>
                    @else
                    <a href="javascript://" class="link" data-photo-select>
                        Добавьте ваше фото (jpg. png. jpeg)
                        <br>для размещения на сайте премии
                    </a>
                    @endif
                </div>
                <form id="photoUpload" style="display: none;" action="{{ Route('evaluation.photoChange') }}">
                    @csrf
                    <label>
                        <input type="file" name="photo" accept="image/*">
                    </label>
                </form> -->
                @endif
                <div class="section-evaluation__score d-lg-flex d-none">
                    @include('evaluation.block.timer')
                </div>
                <div class="section-evaluation__support d-md-block d-none">
                    <div class="section-evaluation__text mb-4">
                        <p class="text opacity-70">
                            Если у вас возникли технические сложности,<span class="d-md-inline d-sm-inline d-none"><br></span>
                            обратитесь&nbsp;в&nbsp;техническую поддержку.
                        </p>
                    </div>
                    <div class="section-evaluation__support-footer">
                        <a href="https://t.me/Russian_Creative_Week" target="_blank" class="btn mr-3 p-0">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.7" cx="25" cy="25" r="24.5" stroke="#222222" />
                                <path opacity="0.7" d="M32.2097 16.1589C32.2097 16.1589 34.1523 15.3798 33.9904 17.272C33.9365 18.0511 33.4508 20.7781 33.0731 23.7278L31.778 32.4653C31.778 32.4653 31.6701 33.7453 30.6987 33.9679C29.7274 34.1905 28.2704 33.1888 28.0006 32.9662C27.7847 32.7992 23.9534 30.2948 22.6043 29.0705C22.2266 28.7365 21.7949 28.0687 22.6583 27.2895L28.3244 21.7243C28.9719 21.0564 29.6195 19.4981 26.9213 21.3903L19.3666 26.6774C19.3666 26.6774 18.5032 27.2339 16.8843 26.733L13.3767 25.62C13.3767 25.62 12.0816 24.7852 14.2941 23.9503C19.6904 21.3346 26.3278 18.6633 32.2097 16.1589Z" fill="#222222" />
                            </svg>
                        </a>
                        <a href="mailto:support@creativityweek.ru" class="link">support@creativityweek.ru</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="section-evaluation__description">
                    <div class="evaluation-textblock">
                        <div class="evaluation-textblock__title">Russian Creative Awards</div>
                        <p class="evaluation-textblock__description opacity-70 mb-3">
                            Премия призвана выявить и&nbsp;поддержать проекты с&nbsp;инновационным походом, оказавшие существенное влияние на&nbsp;развитие креативных отраслей в&nbsp;России, а&nbsp;также профессионалов, чьи&nbsp;инициативы привлекли внимание профессионального сообщества и&nbsp;массовой аудитории и&nbsp;произвели мощный социокультурный эффект.
                        </p>
                        <p class="evaluation-textblock__description opacity-70">
                            Предлагаем Вам&nbsp;ознакомиться с&nbsp;шорт-листом премии, отобранным экспертным советом, и&nbsp;дать свою независимую оценку каждому из&nbsp;финалистов.
                        </p>
                    </div>
                </div>
                <div class="section-evaluation__nominations">
                    <div class="evaluation-textblock" data-swiper-group>
                        <div class="evaluation-textblock__title">
                            <div class="d-flex mt-md-4 mt-0">
                                Номинации:
                                <div class="counter ml-3">
                                    <span data-active-count data-pc-plus="1">1</span>
                                    /
                                    <span data-all-count></span>
                                </div>
                            </div>
                            <div class="slider-navigation slider-navigation__white d-flex pl-sm-0 pl-md-0 mt-0">
                                <div class="arrows-nav">
                                    <div class="arrows-nav__left">
                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="23" cy="23" r="22.5" transform="rotate(-180 23 23)" stroke="#FBFBFB" />
                                            <path d="M11.6464 22.6464C11.4512 22.8417 11.4512 23.1583 11.6464 23.3536L14.8284 26.5355C15.0237 26.7308 15.3403 26.7308 15.5355 26.5355C15.7308 26.3403 15.7308 26.0237 15.5355 25.8284L12.7071 23L15.5355 20.1716C15.7308 19.9763 15.7308 19.6597 15.5355 19.4645C15.3403 19.2692 15.0237 19.2692 14.8284 19.4645L11.6464 22.6464ZM34 22.5L12 22.5L12 23.5L34 23.5L34 22.5Z" fill="#FBFBFB" />
                                        </svg>
                                    </div>
                                    <div class="arrows-nav__right">
                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="23" cy="23" r="22.5" stroke="#FBFBFB" />
                                            <path d="M34.3536 23.3536C34.5488 23.1583 34.5488 22.8417 34.3536 22.6464L31.1716 19.4645C30.9763 19.2692 30.6597 19.2692 30.4645 19.4645C30.2692 19.6597 30.2692 19.9763 30.4645 20.1716L33.2929 23L30.4645 25.8284C30.2692 26.0237 30.2692 26.3403 30.4645 26.5355C30.6597 26.7308 30.9763 26.7308 31.1716 26.5355L34.3536 23.3536ZM12 23.5H34V22.5H12V23.5Z" fill="#FBFBFB" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="evaluation-textblock__description">
                            @include('evaluation.block.nominees-swiper')
                        </div>
                    </div>
                </div>
                <div class="section-evaluation__score d-lg-none d-flex">
                    @include('evaluation.block.timer')
                    <div class="section-evaluation__support d-md-none d-block mb-5">
                        <div class="section-evaluation__text mb-4">
                            <p class="text opacity-70">
                                Если у вас возникли технические сложности,<span class="d-md-inline d-sm-inline d-none"><br></span>
                                обратитесь&nbsp;в&nbsp;техническую поддержку.
                            </p>
                        </div>
                        <div class="section-evaluation__support-footer">
                            <a href="https://t.me/Russian_Creative_Week" target="_blank" class="btn mr-3 p-0">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.7" cx="25" cy="25" r="24.5" stroke="#222222" />
                                    <path opacity="0.7" d="M32.2097 16.1589C32.2097 16.1589 34.1523 15.3798 33.9904 17.272C33.9365 18.0511 33.4508 20.7781 33.0731 23.7278L31.778 32.4653C31.778 32.4653 31.6701 33.7453 30.6987 33.9679C29.7274 34.1905 28.2704 33.1888 28.0006 32.9662C27.7847 32.7992 23.9534 30.2948 22.6043 29.0705C22.2266 28.7365 21.7949 28.0687 22.6583 27.2895L28.3244 21.7243C28.9719 21.0564 29.6195 19.4981 26.9213 21.3903L19.3666 26.6774C19.3666 26.6774 18.5032 27.2339 16.8843 26.733L13.3767 25.62C13.3767 25.62 12.0816 24.7852 14.2941 23.9503C19.6904 21.3346 26.3278 18.6633 32.2097 16.1589Z" fill="#222222" />
                                </svg>
                            </a>
                            <a href="mailto:support@creativityweek.ru" class="small-link-un">support@creativityweek.ru</a>
                        </div>
                    </div>
                </div>
                @if(count($evaluations))
                <div class="section-evaluation__nominees">
                    <div class="evaluation-textblock">
                        <div class="evaluation-textblock__title">
                            Номинируемые
                            <a href="{{ Route('evaluation.projects') }}" class="evaluation-textblock__title-link link" style="text-transform:none;">Полный список</a>
                        </div>
                        <div class="evaluation-textblock__description">
                            <div class="nominees-list">
                                @foreach($evaluations as $evaluation)
                                @include('evaluation.block.nominees-list-item')
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/evaluation/index.js') }}"></script>
@endsection
@extends('layouts.app')
@section('title', 'Личный кабинет')
@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/lk/index.css') }}">
    <!-- disabled phone numbers -->
    <meta name="format-detection" content="telephone=no">
@endsection
@section('body-class', 'body--dark')
@section('isDark', true)
@section('content')
    <div class="lk-wrapper">
        <div class="lk-menu">
            {{__('main.lk_how')}}
            <div class="w-100 mt-auto">
                <a href="{{route('form.show')}}?organization=0">
                    <button class="btn lk-menu-btn btn-white-primary w-100">
                        {{__('main.lk_ind')}}
                    </button>
                </a>
            </div>
            <div class="w-100 mt-auto">
                <a href="/form-new?organization=1">
                    <button class="btn lk-menu-btn btn-white-primary w-100">
                        {{__('main.lk_ent')}}
                    </button>
                </a>
            </div>
        </div>
        <div class="lk-registry">
            @if(!count($request))
                <h2>{{__('main.lk_no')}}</h2>
            @else
                <div class="lk-registry__grid lk-registry__header">
                    <a class="lk-registry__header-status">
                    {{__('main.lk_photo')}}
                    </a>
                    <a class="lk-registry__header-status">
                    {{__('main.lk_name')}}
                    </a>
                    <a class="lk-registry__header-status">
                    {{__('main.lk_nom')}}
                    </a>
                    <a class="lk-registry__header-date {{ array_key_exists('column', $_GET) && $_GET['column'] === 'date' ? 'lk-registry__header-active' : '' }}"
                       href="/lk?column=date&direction={{ array_key_exists('direction', $_GET) && $_GET['direction'] === 'up' ? 'down' : 'up' }}">
                        {{__('main.lk_createDate')}}
                        @if( array_key_exists('column', $_GET) && array_key_exists('direction', $_GET) && $_GET['column'] === 'date')
                            <i class="fa fa-chevron-{{ $_GET['direction'] }}" aria-hidden="true"></i>
                        @endif
                    </a>
                    <a class="lk-registry__header-status {{ array_key_exists('column', $_GET) && $_GET['column'] === 'status' ? 'lk-registry__header-active' : '' }}"
                       href="/lk?column=status&direction={{ array_key_exists('direction', $_GET) && $_GET['direction'] === 'up' ? 'down' : 'up' }}">
                        {{__('main.lk_status')}}
                        @if( array_key_exists('column', $_GET) && array_key_exists('direction', $_GET) && $_GET['column'] === 'status')
                            <i class="fa fa-chevron-{{ $_GET['direction'] }}" aria-hidden="true"></i>
                        @endif
                    </a>
                </div>
                @foreach($request as $item)
                    <div class="lk-registry__item lk-registry__grid">
                        <div class="lk-registry__item-img__wrapper">
                            <img class="lk-registry__item-img" src="{{ $item->image }}"
                                 alt="{{ $item->name_nominate }}">
                        </div>
                        <div class="lk-registry__item-name"
                             title="{{$item->name_nominate ? 'ФИО:' : 'Название организации'}} {{ $item->name_nominate ?? $item->organization_name }}">
                            {{ $item->name_nominate ?? $item->organization_name }}
                            @if($item->director)
                                <span title="Директор: {{ $item->director }}">{{ $item->director }}</span>
                            @endif
                        </div>
                        <div class="lk-registry__item-info">
                            <span title="Номинация: {{ $item->nomination->name }}">{{ $item->nomination->name }}</span>
                            <span title="Индустрия: {{ $item->industry->name }}">{{ $item->industry->name }}</span>
                        </div>
                        <div class="lk-registry__item-date">
                            {{ \Illuminate\Support\Carbon::parse($item->created_at)->format('d.m.Y H:i') }}
                        </div>
                        <div class="lk-registry__item-status">
                            <span class="lk-registry__item-status-text lk-registry__item-status__{{ $item->status_class }}">{{ $item->status_text }}</span>
                            <span class="lk-registry__item-status-icon lk-registry__item-status__{{ $item->status_class }}"><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        @if( $item->status === \App\Constants\Status::$IN_WORK)
                            <div class="lk-registry__item-actions">
                                <a class="lk-registry__item-actions__edit"
                                       href="{{ route('form.project.edit', $item->id) }}?organization={{ $item->is_organization ?? 0 }}"
                                   title="Редактировать"><i
                                            class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="lk-registry__item-actions__delete"
                                   href="{{ Route('form.project.delete', $item->id) }}" title="Удалить"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/page/form/index.js') }}"></script>
@endsection
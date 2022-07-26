@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ mix('css/page/about.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
@endsection
@section('content')
    <div class="About__wrapper" id="content">
        <div class="About__header">
            <h1>{{ __('main.about') }}</h1>
            @if (App::isLocale('en'))
                <a href="javascript://" id="cmd"><i class="fa-solid fa-download"></i> {{ App::isLocale('en') ? 'Save in PDF' : 'Сохранить в PDF'  }}</a>
            @endif
        </div>
        @foreach($items as $item)
            @if($item->isVideo)
                <div class="About__video">
                <iframe width="560" height="315" src="{{ $item->value }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <span>{{ App::isLocale('en') ? 'Link video' : 'Ссылка на видео' }}: <a href="{{ $item->value }}">{{$item->value}}</a></span>
                </div>
            @else
                <p>{{ App::isLocale('en') ? $item->value_en : $item->value }}</p>
            @endif
        @endforeach
    </div>
    <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };

        $('#cmd').click(function () {
            doc.fromHTML($('#content').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('AboutAwards.pdf');
        });
    </script>
@endsection

@section('scripts')
    <script src="{{ mix('js/page/competition.js') }}"></script>
    <script src="{{ mix('js/page/form/index.js') }}"></script>
    <script src="{{ mix('js/page/dark.js') }}"></script>
@endsection

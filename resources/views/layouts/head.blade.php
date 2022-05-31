<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0">

<title>@yield('title')</title>

<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/page/dropMenu/index.css') }}">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
@hasSection('description')
    <meta name="description" content="@yield('description')" />
@else
    <meta name="description" content="Russian Creative Awards {{Request::url() === Route('index') ? '2022' : '2021'}} - Премия призвана выявить наиболее успешные практики, разработанные в креативном секторе нашей страны, обеспечить им поддержку и национальное признание" />
@endif

@hasSection('image')
    <meta property="og:image" content="{{ config('app.url') }}@yield('image')">
@else
    <meta property="og:image" content="{{ config('app.url') }}/img/preview.jpg">
@endif

<script>
    var csrf_token = '{{ csrf_token() }}',
    isDark = "@yield('isDark')";
</script>

@yield('head')
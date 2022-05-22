<!doctype html>
<html class="no-js" lang="">

<head>
    @include('layouts.head')
</head>

<body class="@yield('body-class')" style="@yield('body-style')">
    <div class="wrapper" id="scroll">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>

    @include('layouts.modals')
    @include('layouts.scripts')
    
    
    <svg class="cursor" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="25" cy="25" r="24.5" />
        <path d="M40.5052 25.3536C40.7005 25.1583 40.7005 24.8417 40.5052 24.6464L37.3232 21.4645C37.128 21.2692 36.8114 21.2692 36.6161 21.4645C36.4209 21.6597 36.4209 21.9763 36.6161 22.1716L39.4446 25L36.6161 27.8284C36.4209 28.0237 36.4209 28.3403 36.6161 28.5355C36.8114 28.7308 37.128 28.7308 37.3232 28.5355L40.5052 25.3536ZM9.84863 25.5H40.1517V24.5H9.84863V25.5Z" />
    </svg>
</body>

</html>
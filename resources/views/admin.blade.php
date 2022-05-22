<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admined</title>
</head>

<body>
    <div id="admined"></div>
    @if(request()->user()->group_id == 6)
    <script src="{{ mix('js/admin_expert.js') }}"></script>
    @else
    <script src="{{ mix('js/admin.js') }}"></script>
    @endif
</body>

</html>
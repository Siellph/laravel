<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@section('title') Страница | @show</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@yield('menu')

<div class="flex-center position-ref full-height">


    <div class="content">

        <div class="title m-b-md">
@yield('content')
        </div>

    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

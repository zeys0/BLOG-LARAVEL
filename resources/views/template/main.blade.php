<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{$title}}</title>
</head>

<body class="">
    @include('partials.navbar')



    @yield('container')


    @yield('blog')

    <script src="{{asset('js/script.js')}}"></script>

</body>

</html>b
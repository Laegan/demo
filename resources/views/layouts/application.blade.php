<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Demo - @yield('title', 'Boom')</title>
</head>
<body>

@include('layouts.partials.nav')

@yield('content')

@include('layouts.partials.weekend')

<script src="https://code.jsquery.com/jquery.min.js"></script>
</body>
</html>

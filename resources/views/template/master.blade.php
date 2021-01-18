<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css-view')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Carefy</title>
</head>
<body>
    @yield('component-view')
    @include('template.menu')
    @yield('js-view')
</body>
</html>

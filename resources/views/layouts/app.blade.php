<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    <meta name="robots" content="@yield('meta-robots')">
    <meta name="author" content="Jon Cable">
    <meta name="copyright" content="JonCable.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') - Portfolio Jon Cable</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Mixed Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>
<body>

<div id="app">

    @include('partials/navigation')

    <main role="main">

        @yield('page-content')

    </main>

    <example-component></example-component>

    @include('partials/footer')

</div>

<!-- Mixed Scripts -->
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>
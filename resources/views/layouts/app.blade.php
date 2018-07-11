<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Simple Bootstrap Template">
    <meta name="author" content="Jon Cable">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Portfolio Jon Cable</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>
<body>

<div id="app">

    @include('partials/navigation')

    <main role="main">

        @yield('content')

    </main>

    <example-component></example-component>

    @include('partials/footer')

</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

</body>
</html>
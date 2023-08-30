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

    <!-- Page Canonical -->
    <link rel="canonical" href="@yield('page-canonical')" />

    <!-- Google ReCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?&render=explicit" async defer></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('app.GA4') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('app.GA4') }}');
    </script>

</head>
<body>

<div id="app" class="mb-lg-5">

    @include('partials/navigation')

    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->

            @if(Request::is('/'))

                <div class="bg-secondary pt-2 pb-1">

                    @yield('welcome')

                </div>

            @else

                <div class="bg-secondary pt-3">

                    <div class="container">

                        <div class="d-flex">

                            @include('partials/breadcrumb')

                            <div class="ml-auto">

                                @yield('page-crumbs')

                            </div>

                        </div>

                    </div>

                </div>

            @endif

        @yield('page-content')

    </main>

    @include('partials/footer')

</div>

<!-- Mixed Scripts -->
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<!-- any remote js routines .. e.g. tracking, services, etc -->
@yield('extras')

</body>
</html>
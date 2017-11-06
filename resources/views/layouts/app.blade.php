<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.hiddencredits')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
    <!-- meta -->
    <meta name="description" content="@yield('meta_description','Default description')">
    <meta name="author" content="@yield('meta_author','Filip Vanden Eynde')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or config('app.name', 'Laravel 5.5')  }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/6fedb4a016.js"></script>
    <!-- Fonts -->
    @yield('fonts')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('partials.defaultnavbar')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('partials.hiddencredits')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="@yield('canonical', request()->url())"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or config('app.name')  }}</title>

@section('meta')
    <!-- COMMON TAGS -->
        <title>MovieDB Filip</title>
        <!-- Search Engine -->
        <meta name="description" content="@yield('meta_description','MovieDB Filip just for exercise as project')">
        <meta name="author" content="@yield('meta_author','Filip Vanden Eynde')">
        <meta name="image" content="{{$imagemeta or asset('/officialcontent/logo.png')}}">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="{{$titlemeta or 'MovieDB Filip'}}">
        <meta itemprop="description" content="{{$descriptionmeta or 'MovieDB Filip just for exercise as project'}}">
        <meta itemprop="image" content="{{$imagemeta or asset('/officialcontent/logo.png')}}">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{$titlemeta or 'MovieDB Filip'}}">
        <meta name="twitter:description" content="{{$descriptionmeta or 'MovieDB Filip just for exercise as project'}}">
        <meta name="twitter:site" content="@{{$usertwitteraccountnamemeta or 'vdefilip' }}">
        <meta name="twitter:image:src" content="{{$imagemeta or asset('/officialcontent/logo.png')}}">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="{{$titlemeta or 'MovieDB Filip'}}">
        <meta name="og:description" content="{{$descriptionmeta or 'MovieDB Filip just for exercise as project'}}">
        <meta name="og:image" content="https://www.moviedbfilip.nu/logo.jpg">
        <meta name="og:url" content="{{request()->url()}}">
        <meta name="og:locale" content="{{app()->getLocale() or 'nl_BE'}}">
        <meta name="og:type" content="website">
@endsection

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

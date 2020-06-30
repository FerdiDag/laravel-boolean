<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f40957cf2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- <div class="page-wrapper"> --}}
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    {{-- </div> --}}
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>

</html>

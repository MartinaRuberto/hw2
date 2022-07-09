<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Series Now </title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @yield('css')
    
    @yield('script')
    
</head>
<body>
    <main>
            @yield('content')
    </main>
</body>
</html>
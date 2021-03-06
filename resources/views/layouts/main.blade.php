<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Google Font --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
        {{-- /Google Font --}}
        {{-- FontAwesome --}}
        @yield('fontawesomeLink')
        {{-- /FontAwesome --}}
        {{-- File CSS --}}
        <link rel="stylesheet" href="{{ asset( 'css/app.css' )}}">
        {{-- /File CSS --}}
        <title>@yield('title-page')</title>
    </head>
<body>
{{-- Header Incluso --}}
@include('parts.header')
{{-- /Header Incluso --}}
@yield('content')
{{-- Footer Incluso --}}
@include('parts.footer')
{{-- /Footer Incluso --}}
@yield('js')
</body>
</html>



   

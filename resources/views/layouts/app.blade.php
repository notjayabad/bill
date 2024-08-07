<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jeremiah James B. Abad">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- tailwind css -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- important css file -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/darkmode2.js') }}" ></script>
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        

        <link rel="icon" href="{{url ('assets/img/c2_logo.ico')}}" type="image/x-icon">

        <title>CASURECO II -  Bill Inquiry</title>      
    </head>
    <body class="bg-white dark:bg-gray-900">
        <div class="flex-center position-ref h-screen bg-white dark:bg-gray-900 ">
            @include('inc.navbar')
            @include('inc.messages')
            @yield('content')
            @include('inc.footer')
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{ asset('storage/image/page2.jpg') }}" />
    <meta name="theme-color" content="@yield('color')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="image_src" href="{{ asset('storage/image/page2.jpg') }}" />
    <link rel="icon" href="{{ asset('storage/image/favicon.png') }}" type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@3.0.0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dist/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/owlcarousel/assets/owl.theme.default.min.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <style>
        body {
            margin: 0;
            height: 100vh;
            background-color: rgba(255, 255, 255, 0.95);
        }

    </style>

</head>

<body>

    @yield('body')

    <!-- scroll Up-->
    <div class="aligner">
        <div id="menu-item-project">
            <a href="{{url('/')}}">
                <div class="bt-menu" style="background-color: @yield('color')">
                    <i class="is-paddingless ion-ios-home"></i>
                </div>
            </a>
        </div>
    </div>
    
     {{--  <div class="is-inline-block switch-mobile" id="switch-gray">
            <input type="checkbox" id="switch1" class="switch">
            <label for="switch1">&nbsp;</label>
            </div>  --}}
    <a href="#section-one" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em;color: @yield('color')"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        new WOW().init();

    </script>
</body>

</html>

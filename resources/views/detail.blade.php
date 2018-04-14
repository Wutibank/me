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
    <link rel="icon" href="{{ asset('storage/storage/image/favicon.png') }}" type="image/x-icon" />

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
            background-color: #495867;
        }
        
        ul.a {
            padding-left: 20px;
            list-style-type: square;
            list-style: square;
        }

    </style>

</head>

<body>

    @yield('body')

    <!-- scroll Up-->
    <div class="aligner">
        <div id="menu-item-project" style="top: 50px;">
            <a href="@yield('link')">
                <div class="bt-menu" style="background-color: @yield('color')">
                    <i class="is-paddingless ion-md-arrow-round-back"></i>
                </div>
            </a>
        </div>
    </div>
 {{--  <div class="is-inline-block switch-mobile" id="switch-gray">
            <input type="checkbox" id="switch1" class="switch">
            <label for="switch1">&nbsp;</label>
            </div>  --}}
    <a href="#top" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em;color: @yield('color')"></i></a>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('dist/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>

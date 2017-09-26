<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="image/page.png" />

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
   
    <link rel="image_src" href="{{ asset('storage/image/page.png') }}" />
    <link rel="icon" href="{{ asset('storage/storage/image/favicon.png') }}" type="image/x-icon" />

    <!-- Styles -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hoverbuttons.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@3.0.0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dist/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/owlcarousel/assets/owl.theme.default.min.css') }}">
    <style>
        body {
            margin: 0;
            height:100vh;
           background-color: rgba(255, 255, 255, 0.95);
        }
    </style>

</head>

<body>
   
    @yield('body') 

    <!-- scroll Up-->
    <div class="aligner">

        <div id="menu-item-project">
            <a id="link-two" href="/" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #22AAA1"> <i class="is-paddingless ion-ios-home" style="color: #22AAA1"></i></a>
        </div>
    </div>
    <a href="#section-one" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script>
     new WOW().init();
    </script>
</body>

</html>

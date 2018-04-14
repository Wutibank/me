<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{ asset('storage/image/page2.jpg') }}" />
    <meta name="theme-color" content="#4b7698">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>I AM WUTIBANK</title>

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
            background-color: #495867;
            /*            background-image: linear-gradient(to right, #243949 0%, #517fa4 100%);*/
        }
        
        #canvas-bg {
            position: absolute;
            display: block;
            width: 100%;
            height: 100vh;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url("{{asset('storage/image/bg.jpeg')}}");
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <canvas id="canvas-bg"></canvas>
    <section class="hero is-fullheight" id="section-one">
        <div class="hero-body">
            <div class="container has-text-centered main-title">
                <p class="title is-size-2-mobile has-text-white hbtn hb-border-bottom-br4 wow zoomIn" data-wow-duration="2s" style="padding: 10px 18px;margin-left: 0px;">WUTIBANK</p>
                <p class="subtitle has-text-white wow slideInDown" style="padding-top:15px;"> Now, It's Me </p>

                <div>
                    <a href="#section-two" class="wow slideInDown" data-wow-duration="2s">
                        <div class="bt-menu-head is-inline-block">
                            <i class="is-paddingless ion-md-desktop">
                        </i>
                        </div>
                    </a>

                    <a href="#section-three" class="wow slideInDown" data-wow-duration="2s">
                        <div class="bt-menu-head is-inline-block">
                            <i class="is-paddingless ion-md-bulb">
                        </i>
                        </div>
                    </a>

                    <a href="#section-four" class="wow slideInDown" data-wow-duration="2s">
                        <div class="bt-menu-head is-inline-block">
                            <i class="is-paddingless ion-md-person">
                        </i>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <a href="#section-two">
            <div class="container has-text-centered animated infinite pulse" data-wow-iteration="15">
                <i class="ion-ios-arrow-dropdown-outline has-text-centered down-next"></i>
            </div>
        </a>
    </section>
    <section class="hero is-fullheight" id="section-two">
        <div class="has-text-centered is-hidden-touch">
            <a href="#section-one"> <i class="ion-ios-arrow-dropup-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="has-text-centered">
                    <div class="is-inline-block wow flash" data-wow-duration="3s" data-wow-iteration="3">
                        <i class="ion-md-desktop" style="font-size: 15vmin;color: #fff;padding-right: 0.2em"></i></div>
                    <div class="is-inline-block ">
                        <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.1em">MY PROJECTS</div>
                        <div class="subtitle has-text-white"> ค้นความรู้ด้วยลงมือทำ </div>
                    </div>
                    <div style="padding-top: 0.4em"> <a href="{{url('project')}}" class="hbtn hb-fill-bottom hpad2 is-uppercase">show more</a> </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            @foreach ($item_pro->shuffle() as $itp)
            <div class="item item-pro">
                <a href="{{url('project')}}/{{$itp->id}}">
                    <img alt="{{$itp->title}}" src="{{asset('storage/image/project')}}/{{$itp->cover_thumb}}" title="{{$itp->title}}"></a>
            </div>
            @endforeach

        </div>
        <div class="has-text-centered">
            <a href="#section-three"> <i class="ion-ios-arrow-dropdown-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
    </section>

    <section class="hero is-fullheight" id="section-three">
        <div class="has-text-centered is-hidden-touch">
            <a href="#section-two"> <i class="ion-ios-arrow-dropup-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="has-text-centered">
                    <div class="is-inline-block wow tada" data-wow-duration="3s" data-wow-iteration="3">
                        <i class="ion-md-bulb" style="font-size: 15vmin;color: #fff;padding-right: 0.2em">
                    </i>
                    </div>
                    <div class="is-inline-block">
                        <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.1em">MY ACTIVITIES</div>
                        <div class="subtitle has-text-white"> สรรประสบการณ์สร้างแรงบันดาลใจ </div>
                    </div>
                    <div style="padding-top: 0.4em"> <a href="{{url('activity')}}" class="hbtn hb-fill-bottom hpad2 is-uppercase">show more</a> </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            @foreach ($item_act->shuffle() as $ita)
            <div class="item item-pro">
                <a href="{{url('activity')}}/{{$ita->id}}">
                    <img alt="{{$ita->title}}" src="{{asset('storage/image/activities')}}/{{$ita->cover_thumb}}" title="{{$ita->title}}"></a>
            </div>
            @endforeach
        </div>
        <div class="has-text-centered">
            <a href="#section-four"> <i class="ion-ios-arrow-dropdown-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
    </section>
    <section class="hero is-fullheight" id="section-four">
        <div class="has-text-centered is-hidden-touch">
            <a href="#section-three"> <i class="ion-ios-arrow-dropup-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="has-text-centered">
                            <div class="is-inline-block wow flipInX" data-wow-duration="3s" data-wow-iteration="3">
                                <i class="ion-md-person" style="font-size: 18vmin;color: #fff;padding-right: 0.2em"></i></div>
                            <div class="is-block">
                                <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.2em"> My Story </div>
                                <div class="subtitle has-text-white"> บทเรียงร้อยการเดินทาง </div>
                                <a href="{{url('about')}}" class="hbtn hb-fill-bottom hpad2 is-uppercase">About Me</a>

                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="has-text-centered">
                            <img alt="" src="{{ asset('storage/image/msp01.jpg') }}">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- scroll Up-->

    <div class="aligner is-hidden-mobile">
  
        <div id="menu-item">
            <a id="link-two" href="#section-two">
                <div class="bt-menu is-inline-block">
                    <i class="is-paddingless ion-md-desktop" style="color: #fff"></i>
                </div>
            </a>
            <a id="link-three" href="#section-three">
                <div class="bt-menu is-inline-block" style="background-color: #F25757">
                    <i class="is-paddingless ion-md-bulb"></i>
                </div>
            </a>
            <a id="link-four" href="#section-four">
                <div class="bt-menu is-inline-block" style="background-color: #FFCA3A">
                    <i class="is-paddingless ion-md-person"></i>
                </div>
            </a>
        </div>
    </div>
{{--  
          <div class="is-inline-block switch-mobile" id="switch-gray">
            <input type="checkbox" id="switch1" class="switch">
            <label for="switch1">&nbsp;</label>
        </div>  --}}
    <a href="#section-one" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em"></i></a>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script src="{{ asset('dist/granim/granim.min.js') }}"></script>
    
    <script>
        new WOW().init();
        var granimInstance = new Granim({
            element: '#canvas-bg',
            direction: 'top-bottom',
            opacity: [1, .5, 0],
            isPausedWhenNotInView: true,
            states: {
                "default-state": {
                    gradients: [
                        ['#485563', '#29323c', '#29323c'],
                        ['#C3F3FF', '#00A8D4', '#29323c'],
                        ['#00c6ff', '#0072ff', '#0072ff'],
                        ['#FFB856', '#FFB874', '#B7A99A']
                    ],
                    transitionSpeed: 10000
                }
            }
        });

        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                769: {
                    items: 2,
                    nav: false
                },
                1008: {
                    items: 4,
                    loop: true,
                }
            }
        });
    </script>
</body>

</html>
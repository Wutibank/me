<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="image/page.png" />

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
   
    <link rel="image_src" href="image/page.png" />
    <link rel="icon" href="image/favicon.png" type="image/x-icon" />

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
            /*background-color: #495867;*/
            background-image: linear-gradient(to right, #243949 0%, #517fa4 100%);
        }
    </style>
</head>

<body>
    <section class="hero is-fullheight" id="section-one">
        <div class="hero-body">
            <div class="container has-text-centered main-title">
                <p class="title has-text-white hbtn hb-border-bottom-br4 wow zoomIn" data-wow-duration="2s" style="padding: 10px 18px;margin-left: 0px;">WUTIBANK</p>
                <p class="subtitle has-text-white wow slideInDown"> Now, It's Me </p>
                <div>
                    <a href="#section-two" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir wow slideInDown" data-wow-duration="2s" style="background-color: #22AAA1"> <i class="is-paddingless ion-ios-briefcase" style="font-size: 2em;color: #22AAA1"></i></a>
                    <a href="#section-three" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir wow slideInDown" data-wow-duration="3s" style="background-color: #F25757"> <i class="is-paddingless ion-ios-bulb" style="font-size: 2em;color: #F25757"></i></a>
                    <a href="#section-four" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir wow slideInDown" data-wow-duration="4s" style="background-color: #FFCA3A"> <i class="is-paddingless ion-ios-body" style="font-size: 2em;color: #FFCA3A"></i></a>
                </div>
            </div>
        </div>
        <div class="container has-text-centered wow pulse" data-wow-iteration="15">
            <a href="#section-two"> <i class="ion-ios-arrow-dropdown-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
    </section>
    <section class="hero is-fullheight" id="section-two">
        <div class="has-text-centered is-hidden-touch">
            <a href="#section-one"> <i class="ion-ios-arrow-dropup-outline" style="font-size: 3rem;color: white"></i> </a>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="has-text-centered">
                    <div class="is-inline-block wow swing" data-wow-duration="3s" data-wow-iteration="3">
                        <i class="ion-ios-briefcase" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i></div>
                    <div class="is-inline-block ">
                        <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.1em"> My Projects </div>
                        <div class="subtitle has-text-white"> ความรู้จากการลงมือทำ </div>
                    </div>
                    <div style="padding-top: 0.4em"> <a href="project" class="hbtn hb-fill-bottom hpad2 is-uppercase">show more</a> </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            <div class="item">
                <a href="project-detail.html">
                    <img alt="" src="image/ea01.png" title="โปรเจคชื่อ"></a>
            </div>
            <div class="item"><img alt="" src="image/ea02.png"></div>
            <div class="item"><img alt="" src="image/ea03.png"></div>
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
                    <div class="is-inline-block wow tada" data-wow-duration="3s" data-wow-iteration="3"><i class="ion-ios-bulb" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i></div>
                    <div class="is-inline-block ">
                        <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.1em"> My Activities </div>
                        <div class="subtitle has-text-white"> แรงบันดาลใจสร้างประสบการณ์ </div>
                    </div>
                    <div style="padding-top: 0.4em"> <a href="activity" class="hbtn hb-fill-bottom hpad2 is-uppercase">show more</a> </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            <div class="item"><img alt="" src="image/ea01.png"></div>
            <div class="item"><img alt="" src="image/ea02.png"></div>
            <div class="item"><img alt="" src="image/ea03.png"></div>
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
                            <div class="is-inline-block wow bounce" data-wow-duration="3s" data-wow-iteration="3"><i class="ion-ios-body" style="font-size: 18vmin;color: #fff;padding-right: 0.2em"></i></div>
                            <div class="is-block">
                                <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.2em"> My Story </div>
                                <div class="subtitle has-text-white"> เรื่องราวการเดินทางของชีวิต </div>
                                <a href="about" class="hbtn hb-fill-bottom hpad2 is-uppercase">About Me</a>

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
            <a id="link-two" href="#section-two" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #22AAA1"> <i class="is-paddingless ion-ios-briefcase" style="color: #22AAA1"></i></a>
            <a id="link-three" href="#section-three" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #F25757"> <i class="is-paddingless ion-ios-bulb" style="color: #F25757"></i></a>
            <a id="link-four" href="#section-four" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #FFCA3A"> <i class="is-paddingless ion-ios-body" style="color: #FFCA3A"></i></a>
        </div>
    </div> <a href="#section-one" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
    <script>
        new WOW().init();

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

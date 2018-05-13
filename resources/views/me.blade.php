<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{ asset('storage/image/page2.jpg') }}" />
    <meta name="theme-color" content="#FFCA3A">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>About Me</title>

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
    <link rel="stylesheet" href="{{ asset('dist/magnific-popup/magnific-popup.css') }}">
    <style>
        body {
            margin: 0;
            background-color: #495867;
        }

    </style>

</head>

<body>

    <section id="section-four">
        <div class="container">
            <div class="has-text-centered">
                <i class="ion-md-person" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i>

                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                        MY STORY
                    </div>
                    <div class="subtitle has-text-white">
                       บทเรียงร้อยการเดินทาง
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="parallax-cover is-hidden-touch wow fadeIn" style="background-image: url('{{ asset('storage/image/my01.jpg') }}');"></div>

    <section class="hero is-fullheight" id="section-melist">

        <div class="container">
            <img class="is-hidden-desktop  wow fadeIn" src="{{ asset('storage/image/my01.jpg') }}">
            <div style="padding: 0 6vmin">
                <div class="has-text-centered head-me wow fadeIn">

                    <sup class="title is-5">No 1</sup>
                    <p class="title is-1 is-uppercase" style="font-style: italic">I AM</p>

                </div>
                <hr>
                <div class="">
                    <p class="is-size-3-desktop is-size-4-touch has-text-centered wow fadeIn">For now, it’s just me. Wutthichai Panyasung.</p>
                    <br>
                    <p class="is-size-5-desktop wow fadeIn">I am a student in the 4th year of a King Mongkut's University of Technology Thonburi (KMUTT), In the Field of study Applied Computer Science - Multimedia. I am studying many topics. For example - Graphic design, Programming, Video production and so on, About computer and information technology. Hobby, I like to do surfing the internet, writing articles or poems of memoir on some day.</p>
                    <br>
                    <p class="is-size-5-desktop wow fadeIn">
                        In addition, I am interested to follow and learn more about the trends of technology in today. And usually read articles about website development, Digital Media Design and IT news.</p>
                </div>
                <br>
                <div class="connect has-text-centered  wow fadeIn">
                    <div class="connect-border is-inline-block">
                        <a href="http://issuu.com/wutibank/docs/resume-wb?e=27796719/43724558">
                            <span class="is-size-5"> <i class="icon ion-md-document"></i>
MY RESUME </span>
                        </a>
                    </div>
                    <div class="connect-border is-inline-block">
                        <a href="http://issuu.com/wutibank/docs/wutibank_portfolio?e=27796719/43797768">
                            <span class="is-size-5"> <i class="icon ion-md-document"></i>
PORTFOLIO PUBLICATION</span>
                        </a>
                    </div>

                    <div class="connect-border is-inline-block">
                        <a href="http://wutibank.com/page/CV_Wuthichai-Panyasung.pdf">
                            <span class="is-size-5"> <i class="icon ion-md-document"></i>
CURRICULUM VITAE (CV)</span>
                        </a>
                    </div>


                </div>

                <br>
            </div>
        </div>
    </section>



    <div class="parallax-cover wow fadeIn" style="background-image: url('{{ asset('storage/image/intern.jpg') }}');"></div>
    <section class="hero is-fullheight" id="section-melist" style="padding-bottom: 2em">
        <div class="container">
            <div style="padding: 0 6vmin">
                <div class="has-text-centered head-me wow fadeIn">

                    <sup class="title is-5">No 2</sup>
                    <p class="title is-1 is-uppercase" style="font-style: italic">INTERNSHIP</p>
                    <p class="is-size-5-desktop is-size-6-touch">Programmer Intern, Horganice, June 2017 - July 2017</p>
                </div>
                <hr>
                <div class="">
                    <div class="columns">
                        <div class="column wow fadeIn" style="padding-left: 5vmin">
                        <p class="is-size-4-desktop is-size-6-touch has-text-centered wow fadeIn">Horganice, A communication medium between rental dormitory owners and tenants. Where I had learned how to create the business model canvas. I went to the dormitory area to explore the problem. Then think of solutions to solve those problems. This is an internship, which learned based on the project.</p>
                            {{--  <p class="is-size-5-desktop has-text-weight-semibold has-text-centered pt-3">Ability</p>  --}}
                            <div class="columns is-desktop pt-3">
  <div class="column">
    <img src="{{ asset('storage/image/activities/horganice/h01.jpg') }}">
  </div>
  <div class="column">
    <img src="{{ asset('storage/image/activities/horganice/h02.jpg') }}">
  </div>
  <div class="column">
    <img src="{{ asset('storage/image/activities/horganice/h03.jpg') }}">
  </div>
  <div class="column">
    <img src="{{ asset('storage/image/activities/horganice/h04.jpg') }}">
  </div>
</div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="parallax-cover wow fadeIn" style="background-image: url('{{ asset('storage/image/skills.jpg') }}');"></div>
    <section class="hero is-fullheight" id="section-melist" style="padding-bottom: 2em">
        <div class="container">
            <div style="padding: 0 6vmin">
                <div class="has-text-centered head-me wow fadeIn">

                    <sup class="title is-5">No 3</sup>
                    <p class="title is-1 is-uppercase" style="font-style: italic">SKILLS</p>
                    <p class="is-size-5-desktop is-size-6-touch">My skills may not the best, But I am still improve my skills and learning new things in every time.</p>
                </div>
                <hr>
                <div class="">
                    <div class="columns">
                        <div class="column wow fadeIn" style="padding-left: 5vmin">
                            <p class="title is-3 has-text-centered">Hard Skills</p>

                            <p class="is-size-5-desktop has-text-weight-semibold pb-1">Ability</p>
                            <p class="is-size-6-desktop has-text-weight-light pl-3">Frond-End Development<br>Back-End Development (Learning...)<br> Laravel <br>Vue.js<br>UX/UI Design<br>Graphic Design<br>Poetry Writing</p>

                            <p class="is-size-5-desktop has-text-weight-semibold pt-3">Programming language</p>
                            <p class="is-size-6-desktop has-text-weight-light pl-3"> HTML &amp; CSS<br> Javascript
                                <br> PHP
                                <br> C++ / C / C#
                            </p>
                            <p class="is-size-5-desktop has-text-weight-semibold pt-3">Computer program</p>
                            <p class="is-size-6-desktop has-text-weight-light pl-3"> Photoshop<br> Illustrator
                                <br> Premier Pro
                            </p>
                            <p style="padding-bottom: 1em"></p>
                            <p class="is-size-5-desktop has-text-weight-semibold pb-1">Typing speed</p>
                            <p class="is-size-6-desktop has-text-weight-light pl-3">English : 29 WPM<br>Thai : 35 WPM</p>
                            <sup class=" pl-3">(Test on 10fastfingers.com - 23/09/17)</sup>
                            <p style="padding-bottom: 1em"></p>


                        </div>
                        <div class="is-hidden-mobile" style="border-left: thick solid #FFCA3A;">
                        </div>
                        <div class="column wow fadeIn" style="padding-left: 5vmin">
                            <p class="title is-3 has-text-centered">Soft Skills</p>

                            <p class="is-size-6-desktop has-text-weight-light pl-3"> Positive Attitude<br> Collaborating
                                <br> Ability to Accept and Learn From Criticism<br> Flexibility/Adaptability
                                <br> Logical Thinking<br> Desire to Learn
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="parallax-cover wow fadeIn" style="background-image: url('{{ asset('storage/image/connect.jpg') }}');"></div>
    <section class="hero is-fullheight" id="section-melist">
        <div class="container">
            <div style="padding: 0 6vmin">
                <div class="has-text-centered head-me  wow fadeIn">

                    <sup class="title is-5">No 4</sup>
                    <p class="title is-1 is-uppercase" style="font-style: italic">CONNECT</p>
                    <p class="is-size-5-desktop is-size-6-touch">Connect me in the world.</p>
                </div>
                <hr>

                <div class="connect has-text-centered  wow fadeIn">
                    <div class="connect-border is-inline-block">
                        <a href="mailto:wutthichai.bank@mail.kmutt.ac.th">
                            <span class="is-size-5"> <i class="icon ion-md-mail"></i>
wutthichai.bank@mail.kmutt.ac.th</span>
                        </a>
                    </div>
                    <div class="connect-border is-inline-block">
                        <a href="https://www.fb.com/wutibank">
                            <span class="is-size-5"> <i class="icon ion-logo-facebook"></i>
Facebook</span>
                        </a>
                    </div>
                    <div class="connect-border is-inline-block">
                        <a href="https://www.twitter.com/wutibank">
                            <span class="is-size-5"> <i class="fa fa-twitter-square"></i>
Twitter</span>
                        </a>
                    </div>



                    <div class="connect-border is-inline-block">
                        <a href="https://www.instagram.com/wutibank">
                            <span class="is-size-5"> <i class="fa fa-instagram"></i>
Instagram</span>
                        </a>
                    </div>

                    <div class="connect-border is-inline-block">
                        <a href="https://www.github.com/wutibank">
                            <span class="is-size-5"> <i class="fa fa-github-square"></i>
Github</span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="has-text-centered  wow fadeIn" style="margin-bottom: 5vmin">
                    <div style="background-image: url('{{ asset('storage/image/my01.jpg') }}');min-height: 80vmin; background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section style="background-color: #FFCA3A;height: 50px">
    </section>



    <!-- scroll Up-->
    <div class="aligner">
        <div id="menu-item-project">
            <a id="link-two" href="{{url('/')}}">
                <div class="bt-menu" style="background-color: #FFCA3A">
                    <i class="is-paddingless ion-ios-home"></i>
                </div>
            </a>
        </div>
    </div>
     {{--  <div class="is-inline-block switch-mobile" id="switch-gray">
            <input type="checkbox" id="switch1" class="switch">
            <label for="switch1">&nbsp;</label>
            </div>  --}}
    <a href="#section-one" id="return-to-top"><i class="ion-ios-arrow-up-outline" style="font-size: 2em;color: #FFCA3A"></i></a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="{{ asset('dist/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/wow/wow.min.js') }}"></script>
    <script src="{{ asset('dist/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>

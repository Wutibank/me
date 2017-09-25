@extends('detail')
@section('body')
<i id="top"></i>
  <section class="section" id="section-two">
        <div class="container">

            <div class="has-text-centered">
                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-5-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                        {{ $pj->title }}
                    </div>
                    <div class="subtitle has-text-white is-size-6-touch is-size-4-desktop">
                       {{ $pj->subtitle }}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="text-head" style=" background-color: #22AAA1;">
        <div class="container">
            <div class="has-text-centered">
                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-5-touch is-size-3-desktop" style="padding: 0.5em">
                        {{ $pj->title }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="section-image-project">
        <div class="container">
            <div class="has-text-centered wow fadeIn" data-wow-duration="2s">
            <a class="image-popup-no-margins" href="/storage/image/project/{{ $pj->cover }}">
                <figure class=""><img src="/storage/image/project/{{ $pj->cover }}">
                </figure>
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="section-projectlist">
        <div class="container">

            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 1</sup>
                    <span class="title is-5 is-uppercase">{{ $pj->title }}</span>
                </div>
                <div class="column">
                    <p class="subtitle">{{ $pj->about_head }}</p>

                    <h3>{{ $pj->about_detail }}</h3>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 2</sup>
                    <span class="title is-5">MATERIAL</span>
                </div>
                <div class="column">
                    <ul class="a">
                    @foreach ($ma as $mate)
                        <li>{{ $mate }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 3</sup>
                    <span class="title is-5">ROLES</span>
                </div>
                <div class="column">
                    <ul class="a">
                        @foreach ($ro as $role)
                        <li>{{ $role }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 4</sup>
                    <span class="title is-5">LEARNING SKILLS</span>
                </div>
                <div class="column">
                    <ul class="a">
                         @foreach ($ski as $skill)
                        <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 5</sup>
                    <span class="title is-5">LINK</span>
                </div>
                <div class="column">
                    <a href="{{ $pj->subtitle }}">{{ $pj->link }}</a>
                </div>

            </div>
            <br>
            <div class="columns">
                <div class="column is-3 wow fadeInDown">
                    <sup>No 6</sup>
                    <span class="title is-5">MORE IMAGE</span>
                </div>
                <div class="column wow fadeIn" data-wow-duration="3s">
                    <div class="columns is-multiline">
                     @foreach ($im as $image)

                        <div class="column is-4">
                            <div class="item">
                                <a class="image-popup-no-margins" href="/storage/image/project/{{ $image }}">
                                    <img alt="" src="/storage/image/project/{{ $image }}">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="background-color: #22aaa1;height: 50px">
    </section>

        <div class="aligner">
        <div id="menu-item-project" style="top: 80px;">
            <a id="link-two" href="/project" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #22AAA1"> <i class="is-paddingless ion-md-arrow-round-back" style="color: #22AAA1"></i></a>

        </div>
    </div>
@endsection

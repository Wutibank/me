@extends('detail')
@section('body')
<i id="top"></i>
    <section class="section" id="section-three">
        <div class="container">

            <div class="has-text-centered">
                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-5-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                        {{ $act->title }}
                    </div>
                    <div class="subtitle has-text-white is-size-6-touch is-size-4-desktop">
                        {{ $act->subtitle }}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="text-head" style=" background-color: #F25757;">
        <div class="container">
            <div class="has-text-centered">
                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-5-touch is-size-3-desktop" style="padding: 0.5em">
                        {{ $act->title }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="section-image-project">
        <div class="container">

            <div class="has-text-centered wow fadeIn" data-wow-duration="2s">
                <figure class="">
                    <a class="image-popup-no-margins" href="/storage/image/activities/{{ $act->cover }}">
                        <img src="/storage/image/activities/{{ $act->cover }}">
                    </a>
                </figure>
            </div>
        </div>

    </section>
    <section class="section" id="section-projectlist">
        <div class="container">

            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 1</sup>
                    <span class="title is-5 is-uppercase">About Activity</span>
                </div>
                <div class="column">
                    <p class="subtitle">{{ $act->about_head }}</p>

                    <p>{{ $act->about_detail }}</p>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 2</sup>
                    <span class="title is-5">DATE</span>
                </div>
                <div class="column">
                    {{ $act->date }}
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 3</sup>
                    <span class="title is-5">ORGANIZER</span>
                </div>
                <div class="column">
                    {{ $act->organizer }}
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 4</sup>
                    <span class="title is-5">ROLES</span>
                </div>
                <div class="column">
                    {{ $act->roles }}
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 5</sup>
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
                    <sup>No 6</sup>
                    <span class="title is-5">LINK</span>
                </div>
                <div class="column">
                    <a href="{{ $act->link }}" style="color: #F25757;">{{ $act->link }}</a>
                </div>

            </div>
            <br>
            <div class="columns">
                <div class="column is-3 wow fadeIn" >
                    <sup>No 7</sup>
                    <span class="title is-5">MORE IMAGE</span>
                </div>
                <div class="column wow fadeIn" data-wow-duration="3s">
                    <div class="columns is-multiline">
@foreach ($im as $image)
                        <div class="column is-4">
                            <div class="item">
                                <a class="image-popup-no-margins" href="/storage/image/activities/{{ $image }}">
                                    <img alt="" src="/storage/image/activities/{{ $image }}">
                                </a>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="background-color: #F25757;height: 50px">
    </section>

        <div class="aligner">
        <div id="menu-item-project" style="top: 50px;">
            <a id="link-two" href="/activity" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #F25757"> <i class="is-paddingless ion-md-arrow-round-back" style="color: #F25757"></i></a>

        </div>
    </div>

@endsection

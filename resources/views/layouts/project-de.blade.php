@extends('detail')

@section('title')
 {{ $pj->title }}
@endsection

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
                
                    @if (empty($pj->video))
                    <a class="image-popup-no-margins" href="/storage/image/project/{{ $pj->cover }}">
                        <figure class=""><img src="/storage/image/project/{{ $pj->cover }}">
                        </figure>
                    </a>
                    @else
                    <div class="videoFrame">
                         <iframe src="{{ $pj->video }}" frameborder="0" allowfullscreen></iframe>     
                        </div>
                    @endif

            </div>
        </div>
    </section>
@php
$number = 1;
@endphp
    <section class="section" id="section-projectlist">
        <div class="container">

            @if (!empty($pj->about_head))
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No {{ $number }}</sup>
                    <span class="title is-5 is-uppercase">ABOUT PROJECT</span>
                </div>
                <div class="column">
                    <p class="subtitle">{!! $pj->about_head !!}</p>
                    <h3>{!! $pj->about_detail !!}</h3>
                </div>
            </div>
            @php
            $number++;
            @endphp
            @endif

            @if (!empty($ma[0]))
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No {{$number}}</sup>
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
            @php
            $number++;
            @endphp
            @endif

            @if (!empty($ro[0]))
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No {{ $number }}</sup>
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
            @php
            $number++;
            @endphp
            @endif

            @if (!empty($ski[0]))
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No {{ $number }}</sup>
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
            @php
            $number++;
            @endphp
            @endif

            @if (!empty($pj->link))
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No {{ $number }}</sup>
                    <span class="title is-5">LINK</span>
                </div>
                <div class="column">
                    <a href="{{ $pj->subtitle }}">{{ $pj->link }}</a>
                </div>
            </div>
            @php
            $number++;
            @endphp
            @endif

            @if (!empty($im[0]))
            <div class="columns">
                <div class="column is-3 wow fadeInDown">
                    <sup>No {{ $number }}</sup>
                    <span class="title is-5">MORE IMAGE</span>
                </div>
                <div class="column wow fadeIn" data-wow-duration="3s">
                    <div class="columns is-multiline">
                     @foreach ($im as $image)
                        <div class="column is-4 has-text-centered">
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
            @endif
        </div>
    </section>
    <section style="background-color: #22aaa1;height: 50px">
    </section>

        <div class="aligner">
        <div id="menu-item-project" style="top: 50px;">
            <a id="link-two" href="/project" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #22AAA1"> <i class="is-paddingless ion-md-arrow-round-back" style="color: #22AAA1"></i></a>

        </div>
    </div>
@endsection

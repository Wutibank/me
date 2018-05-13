@extends('detail') @section('title') {{ $pj->title }} @endsection @section('color', '#22AAA1') @section('link') {{url('project')}} @endsection @section('body')
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

<section class="is-fullheight">
<div class="columns is-multiline" style="margin-right:0;">
    <div id="section-image-project" class="column has-text-centered is-12-tablet is-12-desktop is-4-widescreen">
        @if (empty($pj->video))
        <a class="image-popup-no-margins" href="{{asset('storage/image/project')}}/{{ $pj->cover }}">
            <figure class=""><img src="{{asset('storage/image/project')}}/{{ $pj->cover_thumb }}" class="">
            </figure>
        </a>
        @else
        <div class="videoFrame">
            <iframe src="{{ $pj->video }}" frameborder="0" allowfullscreen></iframe>
        </div>
        @endif
    </div>

    @php $number = 1; @endphp
    <div class="column" id="section-projectlist-detail">
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
        @php $number++; @endphp @endif 
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
        @php $number++; @endphp @endif @if (!empty($ro[0]))
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
        @php $number++; @endphp @endif @if (!empty($ski[0]))
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
        @php $number++; @endphp @endif @if (!empty($pj->link))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LINK</span>
            </div>
            <div class="column">
                <a href="{{ $pj->link }}">{{ $pj->link }}</a>
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($im[0]))
        <div class="columns" style="padding-top:5em;">
            {{-- <div class="column is-3 wow fadeInDown">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">MORE IMAGE</span>
            </div> --}}
            <div class="column wow fadeIn" data-wow-duration="3s">
                <div class="columns is-multiline has-text-centered">
                    @foreach ($im as $image)
                    <div class="column is-mobile">
                        <div class="item">
                            <a class="image-popup-no-margins" href="{{asset('storage/image/project')}}/{{ $image }}">
                                <img alt="" src="{{asset('storage/image/project')}}/{{ $image }}" class="">
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        @endif
    </div>
  </div>
  
</section>

<section style="background-color: #22aaa1;height: 50px">
</section>

@endsection

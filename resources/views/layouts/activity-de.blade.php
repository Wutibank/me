@extends('detail') @section('title') {{ $activity->title }} @endsection @section('color', '#F25757') @section('link') {{url('activity')}} @endsection @section('body')
<i id="top"></i>
<section class="section" id="section-three">
    <div class="container">

        <div class="has-text-centered">
            <div class="is-inline-block ">
                <div class="title has-text-white is-size-5-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                    {{ $activity->title }}
                </div>
                <div class="subtitle has-text-white is-size-6-touch is-size-4-desktop">
                    {{ $activity->subtitle }}
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
                    {{ $activity->title }}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="section-image-project">
    <div class="container">

        <div class="has-text-centered wow fadeIn" data-wow-duration="2s">
            <figure class="">
                <a class="image-popup-no-margins" href="{{asset('storage/image/activities')}}/{{ $activity->cover }}">
                        <img src="{{asset('storage/image/activities')}}/{{ $activity->cover }}">
                    </a>
            </figure>
        </div>
    </div>
</section>
@php $number = 1; @endphp
<section class="section" id="section-activitylist">
    <div class="container">

        @if (!empty($activity->about_head))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5 is-uppercase">About Activity</span>
            </div>
            <div class="column">
                <p class="subtitle">{!!$activity->about_head !!}</p>

                <p>{!! $activity->about_detail !!}</p>
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($activity->date))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">DATE</span>
            </div>
            <div class="column">
                {{ $activity->date }}
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($activity->organizer))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">ORGANIZER</span>
            </div>
            <div class="column">
                {{ $activity->organizer }}
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($activity->roles))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">ROLES</span>
            </div>
            <div class="column">
                {{ $activity->roles }}
            </div>

        </div>
        @php $number++; @endphp @endif @if (!empty($activity->skills))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LEARNING SKILLS</span>
            </div>
            <div class="column">
                <ul class="a">
                    @php
                    $skills = explode("&&",$activity->skills)
                    @endphp
                    @foreach ($skills as $skill)
                    <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
        @php $number++; @endphp @endif @if (!empty($activity->link))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LINK</span>
            </div>
            <div class="column">
                <a href="{{ $activity->link }}" style="color: #F25757;">{{ $activity->link }}</a>
            </div>

        </div>
        @php $number++; @endphp @endif @if (!empty($activity->more_image))
        <div class="columns" style="padding-top:5em;">
            <div class="column wow fadeIn" data-wow-duration="3s">
                <div class="columns is-multiline has-text-centered">
                    @php
                    $more_image = explode("&&",$activity->more_image)
                    @endphp
                    @foreach ($more_image as $image)
                    <div class="column is-mobile">
                        <div class="item">
                            <a class="image-popup-no-margins" href="{{asset('storage/image/activities')}}/{{ $image }}">
                                <img alt="" src="{{asset('storage/image/activities')}}/{{ $image }}">
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
<section style="background-color: #F25757;height: 50px">
</section>

@endsection

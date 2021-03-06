@extends('detail') @section('title') {{ $act->title }} @endsection @section('color', '#F25757') @section('link') {{url('activity')}} @endsection @section('body')
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
                <a class="image-popup-no-margins" href="{{asset('storage/image/activities')}}/{{ $act->cover }}">
                        <img src="{{asset('storage/image/activities')}}/{{ $act->cover_thumb }}">
                    </a>
            </figure>
        </div>
    </div>
</section>
@php $number = 1; @endphp
<section class="section" id="section-activitylist">
    <div class="container">

        @if (!empty($act->about_head))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5 is-uppercase">About Activity</span>
            </div>
            <div class="column">
                <p class="subtitle">{!!$act->about_head !!}</p>

                <p>{!! $act->about_detail !!}</p>
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($act->date))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">DATE</span>
            </div>
            <div class="column">
                {{ $act->date }}
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($act->organizer))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">ORGANIZER</span>
            </div>
            <div class="column">
                {{ $act->organizer }}
            </div>
        </div>
        @php $number++; @endphp @endif @if (!empty($act->roles))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">ROLES</span>
            </div>
            <div class="column">
                {{ $act->roles }}
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
        @php $number++; @endphp @endif @if (!empty($act->link))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LINK</span>
            </div>
            <div class="column">
                <a href="{{ $act->link }}" style="color: #F25757;">{{ $act->link }}</a>
            </div>

        </div>
        @php $number++; @endphp @endif @if (!empty($im[0]))
        <div class="columns">
            <div class="column is-3 wow fadeIn">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">MORE IMAGE</span>
            </div>
            <div class="column wow fadeIn" data-wow-duration="3s">
                <div class="columns is-multiline">
                    @foreach ($im as $image)
                    <div class="column is-4">
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

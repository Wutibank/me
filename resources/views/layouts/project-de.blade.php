@extends('detail') @section('title') {{ $project->title }} @endsection @section('color', '#22AAA1') @section('link') {{url('project')}} @endsection @section('body')
<i id="top"></i>
<section class="section" id="section-two">
    <div class="container">

        <div class="has-text-centered">
            <div class="is-inline-block ">
                <div class="title has-text-white is-size-5-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                    {{ $project->title }}
                </div>
                <div class="subtitle has-text-white is-size-6-touch is-size-4-desktop">
                    {{ $project->subtitle }}
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
                    {{ $project->title }}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="is-fullheight">
<div class="columns is-multiline" style="margin-right:0;">
    <div id="section-image-project" class="column has-text-centered is-12-tablet is-12-desktop is-4-widescreen">
        @if (empty($project->video))
        <a class="image-popup-no-margins" href="{{asset('storage/image/project')}}/{{ $project->cover }}">
            <figure class=""><img src="{{asset('storage/image/project')}}/{{ $project->cover_thumb }}" class="">
            </figure>
        </a>
        @else
        <div class="videoFrame">
            <iframe src="{{ $project->video }}" frameborder="0" allowfullscreen></iframe>
        </div>
        @endif
    </div>

    @php $number = 1; @endphp
    <div class="column" id="section-projectlist-detail">
        @if (!empty($project->about_head))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5 is-uppercase">ABOUT PROJECT</span>
            </div>
            <div class="column">
                <p class="subtitle">{!! $project->about_head !!}</p>
                <h3>{!! $project->about_detail !!}</h3>
            </div>
        </div>
        @php $number++; @endphp @endif 
        @if (!empty($project->material))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{$number}}</sup>
                <span class="title is-5">MATERIAL</span>
            </div>
            <div class="column">
                <ul class="a">
                    @php
                    $material = explode("&&",$project->material)
                    @endphp
                    @foreach ($material as $mate)
                    <li>{{ $mate }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @php $number++; @endphp @endif 
        
        @if (count($project->roles) != 0)
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">ROLES</span>
            </div>
            <div class="column">
                <ul class="a">
                    @php
                    $roles = explode("&&",$project->roles)
                    @endphp
                    @foreach ($roles as $role)
                    <li>{{ $role }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @php $number++; @endphp @endif 
        @if (!empty($project->skills))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LEARNING SKILLS</span>
            </div>
            <div class="column">
                <ul class="a">
                    @php
                    $skills = explode("&&",$project->skills)
                    @endphp
                    @foreach ($skills as $skill)
                    <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @php $number++; @endphp @endif 
        @if (!empty($project->link))
        <div class="columns wow fadeInDown">
            <div class="column is-3">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">LINK</span>
            </div>
            <div class="column">
                <a href="{{ $project->link }}">{{ $project->link }}</a>
            </div>
        </div>
        @php $number++; @endphp @endif 
        
        @if (!empty($project->more_image))
        <div class="columns" style="padding-top:5em;">
            {{-- <div class="column is-3 wow fadeInDown">
                <sup>No {{ $number }}</sup>
                <span class="title is-5">MORE IMAGE</span>
            </div> --}}
            <div class="column wow fadeIn" data-wow-duration="3s">
                <div class="columns is-multiline has-text-centered">
                    @php
                    $more_image = explode("&&",$project->more_image)
                    @endphp
                    @foreach ($more_image as $image)
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

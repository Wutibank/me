@extends('main') @section('title', 'MY ACTIVITIES') @section('color', '#F25757') @section('body')
<section id="section-three">
    <div class="container">
        <div class="has-text-centered">
            <i class="ion-md-bulb" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i>

            <div class="is-inline-block ">
                <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.1em"> MY ACTIVITIES </div>
                <div class="subtitle has-text-white">
                    สรรประสบการณ์สร้างแรงบันดาลใจ </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-activitylist">
    <div class="container">

            <div class="columns is-multiline is-centered tileAmimate">
                    @foreach ($act as $item)
                <div class="example-1 column is-12-mobile is-6-tablet is-4-desktop card-item">
                    <div class="wrapper" style="background: url({{asset('storage/image/activities')}}/{{$item->cover}}) 20% 1%/cover no-repeat;background-color:#222">
                        <div class="date" style="background-color: #f25757;">
                            <span class="day">{{ Carbon\Carbon::parse($item->created_at)->format('d')}}</span>
                            <span class="month">{{ Carbon\Carbon::parse($item->created_at)->format('M')}}</span>
                            <span class="year">{{ Carbon\Carbon::parse($item->created_at)->format('Y') + 543}}</span>
                    </div>
                    <div class="data">
                        <div class="content">
                            <span class="author">{{ $item->organizer }}</span>
                            <h1 class="title is-size-5-mobile is-size-3-desktop"><a href="{{url('activity/'.$item->id)}}">{{ $item->title }}</a></h1>
                            <p class="text">{{ $item->subtitle }}</p>
                            <span></span>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
    
            </div>


        {{-- <div class="columns is-multiline">
            @foreach ($act->shuffle() as $acti)
            <div class="column is-4">
                <div class="card">
                    <div class="card-image wow fadeIn" data-wow-duration="3s">
                        <figure class="image image-cover">
                            <img src="{{asset('storage/image/activities')}}/{{ $acti->cover_thumb }}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $acti->title }}</p>
                                <p class="subtitle is-6">{{ $acti->subtitle }}</p>
                            </div>

                            <div class="media-right bt-detail">
                                <a href="{{url('activity')}}/{{ $acti->id }}">
                                    <i class="ion-ios-arrow-dropright-circle-outline" style="color: #f25757;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div> --}}

    </div>
</section>
<section style="background-color: #F25757;height: 50px">
</section>

@endsection

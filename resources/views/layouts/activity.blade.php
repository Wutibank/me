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

        <div class="columns is-multiline">
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

        </div>

    </div>
</section>
<section style="background-color: #F25757;height: 50px">
</section>

@endsection

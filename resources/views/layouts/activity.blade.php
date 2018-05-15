@extends('main') @section('title', 'MY ACTIVITIES') @section('color', '#F25757') @section('body')
<section id="section-three">
    <div class="container">
        <div class="has-text-centered">
            <i class="ion-md-bulb" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i>

            <div class="is-inline-block ">
                <div class="title has-text-white is-size-4-mobile is-size-1-desktop" style="padding-bottom: 0.1em"> MY ACTIVITIES </div>
                <div class="subtitle is-size-6-mobile is-size-2-desktop has-text-white">
                    สรรประสบการณ์สร้างแรงบันดาลใจ </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-activitylist">
    <div class="container">
            <ul class="timeline is-centered">
                @php
                    foreach($act as $item){
                        $yea[] = Carbon\Carbon::parse($item->created_at)->format('Y') + 543;
                    }
                $year =array_unique($yea);

                @endphp
                    @foreach($year as $item_year)
                    <li class="timeline-event">
                      <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">{{$item_year}}</p>
                            <div class="columns is-multiline tileAmimate">
                            @foreach ($act as $item)
                                @if( Carbon\Carbon::parse($item->created_at)->format('Y') + 543 == $item_year)
                                <div class="example-1 column is-12-mobile is-6-tablet is-6-desktop card-item">
                                    <div class="wrapper" style="background: url({{asset('storage/image/activities')}}/{{$item->cover}}) 20% 1%/cover no-repeat;background-color:#222">
                                        <div class="date" style="background-color: #f25757;">
                                            <span class="day">{{ Carbon\Carbon::parse($item->created_at)->format('d')}}</span>
                                            <span class="month">{{ Carbon\Carbon::parse($item->created_at)->format('M')}}</span>
                                            <span class="year">{{ Carbon\Carbon::parse($item->created_at)->format('Y') + 543}}</span>
                                    </div>
                                    <div class="data">
                                        <div class="content">
                                            <span class="author">{{ $item->organizer }}</span>
                                            <h1 class="title is-size-5-mobile is-size-3-desktop"><a href="{{url('activity/'.$item->id)}}" style="color: #f25757;">{{ $item->title }}</a></h1>
                                            <p class="text">{{ $item->subtitle }}</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </li>
                    @endforeach

                  </ul>  

    </div>
</section>
<section style="background-color: #F25757;height: 50px">
</section>

@endsection

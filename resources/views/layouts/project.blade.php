 @extends('main') @section('title', 'MY PROJECTS') @section('color', '#22AAA1') @section('body')
<section id="section-two">
    <div class="container">
        <div class="has-text-centered">
            <i class="ion-md-desktop" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i>
            <div class="is-inline-block ">
                <div class="title has-text-white is-size-4-mobile is-size-1-desktop" style="padding-bottom: 0.2em">
                    MY PROJECTS
                </div>
                <div class="subtitle is-size-6-mobile is-size-2-desktop has-text-white">
                    ค้นความรู้ด้วยลงมือทำ
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-fullheight" id="section-projectlist">
    <div class="container">
        <div class="header-thumbnail">
                <i class="fas fa-code"></i> WEBSITE / PROGRAM
        </div>
        <div class="columns is-multiline is-centered tileAmimate">
            @foreach ($pro_web as $pro)
            <div class="example-1 column is-12-mobile is-6-tablet is-4-desktop card-item wow fadeIn" data-wow-duration="3s">
                <div class="wrapper" style="background: url({{asset('storage/image/project')}}/{{$pro->cover_thumb}}) 20% 25%/contain no-repeat;background-color:#fff;">
                    <div class="date" style="background-color: #22AAA1;">
                        <span class="day">{{ Carbon\Carbon::parse($pro->created_at)->format('d')}}</span>
                        <span class="month">{{ Carbon\Carbon::parse($pro->created_at)->format('M')}}</span>
                        <span class="year">{{ Carbon\Carbon::parse($pro->created_at)->format('Y') + 543}}</span>
                </div>
                <div class="data">
                    <div class="content">
                        <span class="author">#{{ $pro->category }}</span>
                        <h1 class="title is-size-5-mobile is-size-3-desktop"><a href="{{url('project/'.$pro->id) }}" style="color: #22AAA1;">{{ $pro->title }}</a></h1>
                        <p class="text">{{ $pro->subtitle }}</p>
                        <span></span>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>

        <p class="header-thumbnail"><i class="fas fa-pencil-alt"></i> DESIGN / 3D MODEL</p>
        <div class="columns is-multiline is-centered tileAmimate">
            @foreach ($pro_design as $pro)
            <div class="example-1 column is-12-mobile is-6-tablet is-4-desktop card-item wow fadeIn" data-wow-duration="3s">
                <div class="wrapper" style="background: url({{asset('storage/image/project')}}/{{$pro->cover_thumb}}) 20% 25%/contain no-repeat;background-color:#fff;">
                    <div class="date" style="background-color: #22AAA1;">
                        <span class="day">{{ Carbon\Carbon::parse($pro->created_at)->format('d')}}</span>
                        <span class="month">{{ Carbon\Carbon::parse($pro->created_at)->format('M')}}</span>
                        <span class="year">{{ Carbon\Carbon::parse($pro->created_at)->format('Y') + 543}}</span>
                </div>
                <div class="data">
                    <div class="content">
                        <span class="author">#{{ $pro->category }}</span>
                        <h1 class="title is-size-5-mobile is-size-3-desktop"><a href="{{url('project/'.$pro->id) }}" style="color: #22AAA1;">{{ $pro->title }}</a></h1>
                        <p class="text">{{ $pro->subtitle }}</p>
                        <span></span>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>

        <p class="header-thumbnail"><i class="fas fa-film"></i> VIDEO PRODUCTION</p>
        <div class="columns is-multiline is-centered tileAmimate">
            @foreach ($pro_video as $provi)
            <div class="example-1 column is-12-mobile is-6-tablet is-4-desktop card-item wow fadeIn" data-wow-duration="3s">
                <div class="wrapper" style="background: url({{asset('storage/image/project')}}/{{$provi->cover_thumb}}) 20% 25%/contain no-repeat;background-color:#fff;">
                    <div class="date" style="background-color: #22AAA1;">
                        <span class="day">{{ Carbon\Carbon::parse($provi->created_at)->format('d')}}</span>
                        <span class="month">{{ Carbon\Carbon::parse($provi->created_at)->format('M')}}</span>
                        <span class="year">{{ Carbon\Carbon::parse($provi->created_at)->format('Y') + 543}}</span>
                </div>
                <div class="data">
                    <div class="content">
                        <span class="author">#{{ $provi->category }}</span>
                        <h1 class="title is-size-5-mobile is-size-3-desktop"><a href="{{url('project/'.$provi->id) }}" style="color: #22AAA1;">{{ $provi->title }}</a></h1>
                        <p class="text">{{ $provi->subtitle }}</p>
                        <span></span>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- <div class="columns is-multiline is-centered">
            <input type="radio" id="reset" name="color">
            <label for="reset" class="project-bt">ALL PROJECT</label>

            <input type="radio" id="website" name="color">
            <label for="website" class="project-bt">WEBSITE</label>
            <input type="radio" id="program" name="color">
            <label for="program" class="project-bt">PROGRAMMING</label>

            <input type="radio" id="design" name="color">
            <label for="design" class="project-bt">DESIGN &amp; 3D MODEL</label>

            <input type="radio" id="video" name="color">
            <label for="video" class="project-bt">VIDEO PRODUCTION</label> 
            


            @foreach ($pj->shuffle() as $pro)
            <div class="column is-6-tablet is-4-desktop tileAmimate {{ $pro->category }}">
                
                <div class="card">
                    <div class="card-image item-pro wow fadeIn" data-wow-duration="3s">
                        <figure class="image">
                            <img src="{{asset('storage/image/project')}}/{{$pro->cover_thumb}}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content card-content is-capitalized">
                                <p class="title is-4">{{ $pro->title }}</p>
                                <p class="subtitle is-6">{{ $pro->subtitle }}</p>
                                <p style="color: #22AAA1">#{{ $pro->category }}</p>
                            </div>

                            <div class="media-right bt-detail">
                                <a href="{{url('project')}}/{{ $pro->id }}">
                                    <i class="ion-ios-arrow-dropright-circle-outline" style="color: rgb(34, 170, 161);"></i>
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
<footer class="footer-project">
</footer>

@endsection

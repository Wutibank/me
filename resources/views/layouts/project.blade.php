 @extends('main') @section('title', 'My Projects') @section('body')
<section id="section-two">
    <div class="container">
        <div class="has-text-centered">
            <i class="ion-ios-briefcase" style="font-size: 20vmin;color: #fff;padding-right: 0.2em"></i>
            <div class="is-inline-block ">
                <div class="title has-text-white is-size-2-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                    My Projects
                </div>
                <div class="subtitle has-text-white">
                    สืบเสาะความรู้ด้วยการลงมือทำ
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section  is-fullheight" id="section-projectlist">
    <div class="container">
        <div class="columns is-multiline is-centered">
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
                    <div class="card-image item-pro">
                        <figure class="image">
                            <img src="storage/image/project/{{ $pro->cover }}" alt="Placeholder image">
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
                                <a href="project/{{ $pro->id }}">
                                    <i class="ion-ios-arrow-dropright-circle-outline" style="color: rgb(34, 170, 161);"></i>
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
<div class="footer-project">
</div>
<!-- <section class="is-hidden-touch" style="background-color: #22aaa1;height: 50px;bottom:0">
    </section> -->

@endsection

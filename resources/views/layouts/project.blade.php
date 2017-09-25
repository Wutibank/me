 @extends('main') 
 @section('body')
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

    <section class="section" id="section-projectlist">
        <div class="container">


            <div class="columns is-multiline is-centered">

                <input type="radio" id="reset" name="color">
                <label for="reset" class="project-bt">ALL PROJECT</label>

                <input type="radio" id="program" name="color">
                <label for="program" class="project-bt">PROGRAMMING</label>

                <input type="radio" id="design" name="color">
                <label for="design" class="project-bt">DESIGN &amp; 3D MODEL</label>

                <input type="radio" id="video" name="color">
                <label for="video" class="project-bt">VIDEO PRODUCTION</label>

                <input type="radio" id="other" name="color">
                <label for="other" class="project-bt">OTHER</label>
                
@foreach ($pj as $pro)
                <div class="column is-4 tileAmimate {{ $pro->category }}">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="storage/image/project/{{ $pro->cover }}" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">

                                <div class="media-content">
                                    <p class="title is-4">{{ $pro->title }}</p>
                                    <p class="subtitle is-6">{{ $pro->subtitle }}</p>
                                    <p style="color: #22AAA1">#{{ $pro->category }}</p>
                                </div>

                                <div class="media-right">
                                    <a href="project/{{ $pro->id }}">
                                        <i class="ion-ios-arrow-dropright-circle-outline" style="color: #777;font-size: 2.5em"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
                <div class="column is-4 tileAmimate design">
                    designnnn
                </div>
                <div class="column is-4 tileAmimate program">
                    pro
                </div>
                <div class="column is-4 tileAmimate other">
                    other
                </div>
                <div class="column is-4 tileAmimate video">
                    vid
                </div>

            </div>

        </div>
    </section>

    <section style="background-color: #22aaa1;height: 50px">
    </section>

    @endsection
@extends('detail')
@section('body')
<i id="top"></i>
  <section class="section" id="section-two">
        <div class="container">

            <div class="has-text-centered">
                <div class="is-inline-block ">
                    <div class="title has-text-white is-size-5-touch is-size-1-desktop" style="padding-bottom: 0.2em">
                        Name Project Name Project Name Project
                    </div>
                    <div class="subtitle has-text-white is-size-6-touch is-size-4-desktop">
                        คำอธิบายย่อหนึ่งประโยค
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
                        Name Project Name Project Name Project
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="section-image-project">
        <div class="container">
            <div class="has-text-centered wow fadeIn" data-wow-duration="2s">
                <figure class=""><img src="image/d003.png">
                </figure>
            </div>
        </div>
    </section>

    <section class="section" id="section-projectlist">
        <div class="container">

            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 1</sup>
                    <span class="title is-5 is-uppercase">About Project</span>
                </div>
                <div class="column">
                    <p class="subtitle">เว็บไซต์แสดงข้อมูลของแคคตัส สถานที่ขายหรือคาเฟ่แคคตัส โปรเจกต์ในรายวิชา Interactive Design.</p>

                    <h3>เว็บไซต์ออกแบบในรูปแบบ Flat Design, Card design เน้นความเรียบง่ายสบายตา พื้นหลังของหน้า Home ใช้ภาพที่เป็น Cinemagraph โดยตัวเว็บไซต์ประกอบไปด้วยเนื้อหาหลักๆคือ ข้อมูลเกี่ยวกับแคคตัส คลังรูปภาพแคคตัส ชุมชนแลกเปลี่ยนข้อมูลแคคตัส แนะนำสถานที่ขายและคาเฟ่แคคตัส เว็บไซต์ Tiny Plants จึงเหมาะสาหรับผู้ที่สนใจ Cactus ต้องการที่จะหาความรู้ทั้งสายพันธุ์วิธีการดูแลรักษา และแลกเปลี่ยนความรู้กับกลุ่มคนที่ชื่นชอบแบบเดียวกัน</h3>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 2</sup>
                    <span class="title is-5">MATERIAL</span>
                </div>
                <div class="column">
                    <ul class="a">
                        <li>MDBootstrap Framework</li>
                        <li>Bootstrap Framework</li>
                        <li>SQLite</li>
                        <li>MySQL</li>
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 3</sup>
                    <span class="title is-5">ROLES</span>
                </div>
                <div class="column">
                    <ul class="a">
                        <li>MDBootstrap Framework</li>
                        <li>Bootstrap Framework</li>
                        <li>SQLite</li>
                        <li>MySQL</li>
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 4</sup>
                    <span class="title is-5">LEARNING SKILLS</span>
                </div>
                <div class="column">
                    <ul class="a">
                        <li>MDBootstrap Framework</li>
                        <li>Bootstrap Framework</li>
                        <li>SQLite</li>
                        <li>MySQL</li>
                    </ul>
                </div>

            </div>
            <br>
            <div class="columns wow fadeInDown">
                <div class="column is-3">
                    <sup>No 5</sup>
                    <span class="title is-5">LINK</span>
                </div>
                <div class="column">
                    <a href="#">www.wutibank.com</a>
                </div>

            </div>
            <br>
            <div class="columns">
                <div class="column is-3 wow fadeInDown">
                    <sup>No 6</sup>
                    <span class="title is-5">MORE IMAGE</span>
                </div>
                <div class="column wow fadeIn" data-wow-duration="3s">
                    <div class="columns is-multiline">
                        <div class="column is-4">
                            <div class="item">
                                <a class="image-popup-no-margins" href="image/ea01.png">
                                    <img alt="" src="image/ea01.png">
                                </a>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="item"><img alt="" src="image/ea02.png"></div>
                        </div>
                        <div class="column is-4">
                            <div class="item"><img alt="" src="image/ea03.png"></div>
                        </div>
                        <div class="column is-4">
                            <div class="item"><img alt="" src="image/ea03.png"></div>
                        </div>
                        <div class="column is-4">
                            <div class="item"><img alt="" src="image/ea02.png"></div>
                        </div>
                        <div class="column is-4">
                            <div class="item"><img alt="" src="image/ea01.png"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section style="background-color: #22aaa1;height: 50px">
    </section>

        <div class="aligner">
        <div id="menu-item-project" style="top: 80px;">
            <a id="link-two" href="/project" class="hbtn hb-fill-bottom-rev-bg hpad3 hcir2" style="background-color: #22AAA1"> <i class="is-paddingless ion-md-arrow-round-back" style="color: #22AAA1"></i></a>

        </div>
    </div>
@endsection

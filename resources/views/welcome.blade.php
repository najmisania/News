@include('navbar.head')
<style media="screen">
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
</style>
    <body>
    <header>
          <nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
                <div class="container">
                    <a href="/">
                    <img class="img-fluid" src="{{asset('img/logo-2.png')}}" alt=""></a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                 <ul class="nav-menu">
                            <li class="menu-active"><a style="color:white;" href="\">Home</a></li>
                            <li><a style="color:white;" href="\history">History Berita</a></li>
                            <li class="menu-has-children"><a style="color:white;" href="#">Kategori Berita</a>
                            <ul>
                                <li><a style="color:black;" href="standard-post.html">DTS</a></li>
                                <li><a style="color:black;" href="image-post.html">NON DTS</a></li>
                            </ul></li>
                            <li><a style="color:white;" href="\upload">Upload News</a></li>
                            <li><a style="color:white;" data-toggle="modal" data-target="#myModal">About</a></li>
                            <li><a style="color:white;" data-toggle="modal" data-target="#myModal1">Contact</a></li>
                                <li class="nav-item dropdown">
                                  <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{route('login')}}"><span class="lnr lnr-phone-user"></span><span>Login</span></a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ url('/admin') }}">
                                          {{ __('Admin') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('/login') }}">
                                          {{ __('User') }}
                                      </a>
                                  </div>
                                </li>
                                <li class="nav-item"><a style="color: white;" class="nav-link" href="{{route('register')}}">Register</a></li>
                            </ul>
                        </div>
                </div>
          </nav>
            <div class="logo-wrap">
                <div class="container">
                     <h6><span style="color:red;">Breaking News:</span><marquee>Program Digital Talent Scholarship Tahun 2019 (DTS 2019) merupakan program pengembangan sumber daya manusia (SDM) yang dilaksanakan Kementerian Komunikasi dan Informatika (Kemenkominfo) sebagai bagian dari program pembangunan prioritas nasional.</marquee>
                </div>
            </div>

                <!-- The Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog modal-xl">
<div class="modal-content">

  <!-- Modal Header -->
  <div class="modal-header">
    <h4 class="modal-title">About</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <!-- Modal body -->
  <div class="modal-body">
    <img src="{{asset('img/dts.png')}}" alt="">
    <div class="container">
      <p>Program Digital Talent Scholarship Tahun 2019 (DTS 2019) merupakan program pengembangan sumber daya manusia (SDM) yang dilaksanakan Kementerian Komunikasi dan Informatika (Kemenkominfo) sebagai bagian dari program pembangunan prioritas nasional. Program pelatihan kompetensi DTS 2019 ditujukan untuk meningkatkan keterampilan (up-skilling) SDM bidang Komunikasi dan Informatika sehingga dapat meningkatkan produktivitas dan daya saing bangsa. Program DTS 2019 secara garis besar dibagi menjadi empat akademi, yaitu:</p>
      <ul>
        <li>- Fresh Graduate Academy (FGA) , program pelatihan bagi lulusan D3, D4 dan S1 bidang TIK dan MIPA, terbuka bagi penyandang disabilitas;</li>
        <li>- Vocational School Graduate Academy (VSGA) , program pelatihan bagi lulusan SMK;</li>
        <li>- Coding Teacher Academy (CTA) , program pelatihan bagi para guru yang mengajar bidang TIK pada SMK, SMA, SMALB, dan Madrasah Aliyah (Terbuka bagi Guru PNS dan Non PNS); dan</li>
        <li>- Online Academy (OA) , program pelatihan secara online bagi masyarakat umum termasuk ASN, mahasiswa, dan pelaku industri.</li>
      </ul>

    </div>
  </div>

  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>

</div>
</div>
</div>

<div class="modal fade" id="myModal1">
<div class="modal-dialog modal-xl">
<div class="modal-content">

  <!-- Modal Header -->
  <div class="modal-header">
    <h4 class="modal-title">Contact</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>

  <!-- Modal body -->
  <div class="modal-body">
    <img src="{{asset('img/dts.png')}}" alt="">
    <div class="container text-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.035759999712!2d106.95690725069078!3d-6.259019995447367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d00ab3824a3%3A0x556821c39752eb5e!2sGunadarma%20University%20J6!5e0!3m2!1sen!2sid!4v1571494326208!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    </div>
  </div>

  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>

</div>
</div>
</div>
            </div>
        </header>

        <div class="site-main-container">
            <!-- Start top-post Area -->
            <section class="top-post-area pt-10">
                <div class="container no-padding">
                    <div class="row small-gutters">
                        <div class="col-lg-8 top-post-left">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
                            </div>
                            <div class="top-post-details">
                                <ul class="tags">
                                    <li><a href="#">News DTS</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h3>Coaching “Personal Development & Ready To Work Profile” dan Job Fair Universitas Negeri Padang 2019 pada 16-17 Oktober 2019</h3>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 top-post-right">
                            <div class="single-top-post">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('img/top-post2.jpg')}}" alt="">
                                </div>
                                <div class="top-post-details">
                                    <ul class="tags">
                                        <li><a href="#">Food Habit</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-top-post mt-10">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('img/top-post3.jpg')}}" alt="">
                                </div>
                                <div class="top-post-details">
                                    <ul class="tags">
                                        <li><a href="#">Food Habit</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is Better</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!-- End top-post Area -->
            <!-- Start latest-post Area -->
            <section class="latest-post-area pb-120">
                <div class="container no-padding">
                    <div class="row">
                        <div class="col-lg-8 post-list">
                            <!-- Start latest-post Area -->
                            <div class="latest-post-wrap">
                                <h4 class="cat-title">Latest News</h4>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('img/l1.jpg')}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Lifestyle</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="image-post.html">
                                            <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p class="excert">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('img/l2.jpg')}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Science</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="image-post.html">
                                            <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('img/l3.jpg')}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="image-post.html">
                                            <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-latest-post row align-items-center">
                                    <div class="col-lg-5 post-left">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('img/l4.jpg')}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7 post-right">
                                        <a href="image-post.html">
                                            <h4>A Discount Toner Cartridge Is
                                            Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End latest-post Area -->

                            <!-- Start banner-ads Area -->
                            <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                                <img class="img-fluid" src="{{asset('img/banner-ad.jpg')}}" alt="">
                            </div>
                            <!-- End banner-ads Area -->
                            <!-- Start popular-post Area -->
                            <div class="popular-post-wrap">
                                <h4 class="title">Popular Posts</h4>
                                <div class="feature-post relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset('img/f1.jpg')}}" alt="">
                                    </div>
                                    <div class="details">
                                        <ul class="tags">
                                            <li><a href="#">Food Habit</a></li>
                                        </ul>
                                        <a href="image-post.html">
                                            <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-20 medium-gutters">
                                    <div class="col-lg-6 single-popular-post">
                                        <div class="feature-img-wrap relative">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="img/f2.jpg" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 single-popular-post">
                                        <div class="feature-img-wrap relative">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('img/f3.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End popular-post Area -->
                            <!-- Start relavent-story-post Area -->
                            <div class="relavent-story-post-wrap mt-30">
                                <h4 class="title">Relavent Stories</h4>
                                <div class="relavent-story-list-wrap">
                                    <div class="single-relavent-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('img/r1.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-relavent-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('img/r2.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Science</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="single-relavent-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('img/r3.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End relavent-story-post Area -->
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebars-area">
                                <div class="single-sidebar-widget editors-pick-widget">
                                    <h6 class="title">Editor’s Pick</h6>
                                    <div class="editors-pick-post">
                                        <div class="feature-img-wrap relative">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('img/e1.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Travel</a></li>
                                            </ul>
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h4 class="mt-20">A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                            </p>
                                        </div>
                                        <div class="post-lists">
                                            <div class="single-post d-flex flex-row">
                                                <div class="thumb">
                                                    <img src="img/e2.jpg" alt="">
                                                </div>
                                                <div class="detail">
                                                    <a href="image-post.html"><h6>Help Finding Information
                                                    Online is so easy</h6></a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-post d-flex flex-row">
                                                <div class="thumb">
                                                    <img src="{{asset('img/e3.jpg')}}" alt="">
                                                </div>
                                                <div class="detail">
                                                    <a href="image-post.html"><h6>Compatible Inkjet Cartr
                                                    world famous</h6></a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="single-post d-flex flex-row">
                                                <div class="thumb">
                                                    <img src="{{asset('img/e4.jpg')}}" alt="">
                                                </div>
                                                <div class="detail">
                                                    <a href="image-post.html"><h6>5 Tips For Offshore Soft
                                                    Development </h6></a>
                                                    <ul class="meta">
                                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget ads-widget">
                                    <img class="img-fluid" src="{{asset('img/sidebar-ads.jpg')}}" alt="">
                                </div>
                                <div class="single-sidebar-widget newsletter-widget">
                                    <h6 class="title">Newsletter</h6>
                                    <p>
                                        Here, I focus on a range of items
                                        andfeatures that we use in life without
                                        giving them a second thought.
                                    </p>
                                    <div class="form-group d-flex flex-row">
                                        <div class="col-autos">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
                                            </div>
                                        </div>
                                        <a href="#" class="bbtns">Subcribe</a>
                                    </div>
                                    <p>
                                        You can unsubscribe us at any time
                                    </p>
                                </div>
                                <div class="single-sidebar-widget most-popular-widget">
                                    <h6 class="title">Most Popular</h6>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('img/m1.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>Help Finding Information
                                                Online is so easy</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('img/m2.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>Compatible Inkjet Cartr
                                                world famous</h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('img/m3.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>5 Tips For Offshore Soft
                                                Development </h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-list flex-row d-flex">
                                        <div class="thumb">
                                            <img src="{{asset('img/m4.jpg')}}" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="image-post.html">
                                                <h6>5 Tips For Offshore Soft
                                                Development </h6>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget social-network-widget">
                                    <h6 class="title">Social Networks</h6>
                                    <ul class="social-list">
                                        <li class="d-flex justify-content-between align-items-center fb">
                                            <div class="icons d-flex flex-row align-items-center">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                                <p>983 Likes</p>
                                            </div>
                                            <a href="#">Like our page</a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center tw">
                                            <div class="icons d-flex flex-row align-items-center">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                                <p>983 Followers</p>
                                            </div>
                                            <a href="#">Follow Us</a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center yt">
                                            <div class="icons d-flex flex-row align-items-center">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                <p>983 Subscriber</p>
                                            </div>
                                            <a href="#">Subscribe</a>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center rs">
                                            <div class="icons d-flex flex-row align-items-center">
                                                <i class="fa fa-rss" aria-hidden="true"></i>
                                                <p>983 Subscribe</p>
                                            </div>
                                            <a href="#">Subscribe</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div></div>
            </section>
            <!-- End latest-post Area -->
@include('navbar.footer')
@include('navbar.script')

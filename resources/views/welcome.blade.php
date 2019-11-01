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
                <img class="imgcustom" src="{{asset('img/logodts2.png')}}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-lg-10 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        <ul class="nav-menu-container navbar-nav ml-auto">
                            <ul class="nav-menu">


                             <li class="menu-has-children"><a style="color:white;" href="#">Kategori Berita</a>
                                <ul class="nav-menu">
                                    <li><a style="color:black;" href="standard-post.html">DTS</a></li>
                                    <li><a style="color:black;" href="image-post.html">NON DTS</a></li>
                                </ul>
                              </li>
                                <li><a style="color:white;" href="\upload">Upload News</a></li>
                                <li><a style="color:white;" href="\history">History Berita</a></li>
                                <li><a style="color:white;" href="#" data-toggle="modal" data-target="#myModal">About</a></li>
                                <li><a style="color:white;" href="#" data-toggle="modal" data-target="#myModal1">Contact</a></li>
                                <li><a style="color:white;" href="#">Jadwal</a></li>
                            </ul>
                        </ul>
                        </div>
                        <div class="col-lg-9 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-right">
                            <ul class="nav-menu-container navbar-nav ml-auto">
                            <ul class="nav-menu">
                                <li class="menu-has-children"><a style="color:white;" href="#">Login</a>
                                  <ul class="nav-menu">
                                        <li><a style="color:black;" href="{{url('/admin/login')}}">Admin</a></li>
                                        <li><a style="color:black;" href="{{url('/login')}}">User</a></li>
                                    </ul></li>
                                    <li class="nav-item"><a style="color: white;" class="nav-link" href="{{route('register')}}">Register</a></li>
                                </ul></ul>
                        </div>
                    </div>
                </div>
                </nav>

                <div class="logo-wrap">
                    <div class="container">
                       <h6><span style="color:red;">Breaking News:</span><marquee>Program Digital Talent Scholarship Tahun 2019 (DTS 2019) merupakan program pengembangan sumber daya manusia (SDM) yang dilaksanakan Kementerian Komunikasi dan Informatika (Kemenkominfo) sebagai bagian dari program pembangunan prioritas nasional.</marquee>
                       </div>
                   </div>

                   <!-- The Modal -->
@extends('about')

@extends('contact')
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
                            <li><a href="#">DTS</a></li>
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
                            <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
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
                            <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
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
                         @foreach($berita as $brt)
                        <div class="single-latest-post row align-items-center">

                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="/history/lihat/{{$brt->id}}"><img class="img-fluid" src="{{asset('img/dts1.png')}}" alt=""></a>
                                </div>
                                <ul class="tags">
                                    <li><a href="/history">{{$brt->kategori}}</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="/history/lihat/{{$brt->id}}">
                                    <h4>{{$brt->judul}}</h4>
                                </a>
                                <ul class="meta">
                                    {{-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li> --}}
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ date('d F Y', strtotime($brt->created_at)) }}</a></li>
                                    {{-- <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> --}}
                                </ul>
                                <p class="excert">
                                    {{$brt->ringkasan}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End latest-post Area -->

                    <!-- Start banner-ads Area -->

                    <!-- End banner-ads Area -->
                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap mt-30">
                        <h4 class="title">Popular Posts</h4>
                        <div class="feature-post relative">
                            <div class="feature-img relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
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
                                        <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
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
                                        <img class="img-fluid" src="{{asset('img/dts1.png')}}" alt="">
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

                </div>

            </div>
        </div>
    </div>
</div></div>
</section>
<!-- End latest-post Area -->
@include('navbar.footer')
@include('navbar.script')

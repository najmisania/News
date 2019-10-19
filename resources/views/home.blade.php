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
          <img class="img-fluid" src="{{asset('img/logo-2.png')}}" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">
                            <i class="fas fa-user-cog"></i>Profil
                          </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<div class="logo-wrap">
    <div class="container">


                  <div class="container main-menu" id="main-menu">
                      <div class="row align-items-center justify-content-between">
                          <nav id="nav-menu-container">
                              <ul class="nav-menu">
                                  <li class="menu-active"><a style="color:black;" href="\">Home</a></li>
                                  <li><a style="color:black;" href="\history">History Berita</a></li>
                                  <li class="menu-has-children"><a style="color:black;" href="#">Kategori Berita</a>
                                  <ul>
                                      <li><a style="color:black;" href="standard-post.html">DTS</a></li>
                                      <li><a style="color:black;" href="image-post.html">NON DTS</a></li>
                                  </ul></li>
                                  <li><a style="color:black;" href="\upload">Upload News</a></li>
                                  <li><a style="color:black;" data-toggle="modal" data-target="#myModal">About</a></li>
                                  <li><a style="color:black;" data-toggle="modal" data-target="#myModal1">Contact</a></li>
                            </nav>
                            <div class="navbar-right">
                                <form class="Search">
                                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
                                    <label for="Search-box" class="Search-box-label">
                                        <span class="lnr lnr-magnifier"></span>
                                    </label>
                                    <span class="Search-close">
                                        <span class="lnr lnr-cross"></span>
                                    </span>
                                </form>
                            </div>
                          </ul>

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

</div>
</div>
</header> <br><br><br>

@extends('navbar.footer')
@extends('navbar.script')

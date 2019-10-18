@extends('navbar.head')
<header>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
    <div class="container">
          <h1 style="color: white;">DTS News</h1>
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

    </div>
</div>
<div class="container main-menu" id="main-menu">
    <div class="row align-items-center justify-content-between">
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a style="color:black;" href="index.html">Home</a></li>
                <li><a style="color:black;" href="\history">History Berita</a></li>
                <li class="menu-has-children"><a style="color:black;" href="">Kategori Berita</a>
                <ul>
                    <li><a style="color:black;" href="standard-post.html">DTS</a></li>
                    <li><a style="color:black;" href="image-post.html">NON DTS</a></li>
                </ul></li>
                <li><a style="color:black;" href="\upload">Upload News</a></li>
            <li><a style="color:black;"href="about.html">About</a></li>
            <li><a style="color:black;"href="contact.html">Contact</a></li>
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
</div>
</header> <br><br><br>

@extends('navbar.footer')

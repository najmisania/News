@include('navbar.head')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
        <div class="container">
            <a href="/">
                <img class="img-fluid" src="{{asset('img/logo-2.png')}}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-lg-10 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        </div>
                        <div class="col-lg-9 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-right">
                            <ul class="nav-menu-container navbar-nav ml-auto">
                            <ul class="nav-menu">
                                
                                    <li><a style="color:white;" href="\history">History Berita</a></li>
                                </ul></ul>
                        </div>
                    </div>
                </div>
                </nav>
<br>
<br>
<br>
<br>
<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
    	<h4 colspan="3" class="text-center">{{$berita->judul}}</h4>

    </div>
    <div class="card-body">
      <h5>{{$berita->created_at}}</h5>
      <br>
     <p class="text-justify">{{$berita->isi}}</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
@include('navbar.footer')
@include('navbar.script')

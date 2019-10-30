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
                                
                                    <li><a style="color:white;" href="\upload">Upload News</a></li>
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
    
    <div class="card-body">
      <div class="table-responsive">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-2">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4"></h1>
              </div>
              <h4 colspan="3" class="text-center">HISTORY BERITA</h4>
              @include('layouts.alert')
              
              <br><br>
              <form class="user" method="post" action="">
                <table  class="table">
                  <tr>
                    <th width="5%" class=" text-center">NO</th>
                    <th width="15%" class=" text-center">Judul Berita</th>

                    <th width="15"class=" text-center">Kategori Berita</th>

                    <th width="15"class=" text-center">Ringkasan Berita</th>
                    <th width="15"class=" text-center">Tanggal</th>

                    <th width="15"class=" text-center">Status</th>
                    <th width="15" class="text-center">Opsi</th>
                  </tr>
                  @php
                  $no = 1;
                  @endphp
                  @foreach ($berita as $brt)
                  <tr>
                    <td class=" text-center">{{ $no }}</td>
                    <td>{{ $brt->judul }}</td>

                    <td>{{ $brt->kategori }}</td>
                    <td>{{ $brt->ringkasan }}</td>
                    <th>{{ $brt->created_at}}</th>
                    <td></td>


                    <td class=" text-center">
                      <a href="/history/lihat/{{$brt->id}}" class=" btn btn-primary btn-sm">Lihat Berita</a>
                      <br><br>
                      <a href="/history/edit/{{ $brt->id }}" class=" btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></a></i>
                      <a href="/history/hapus/{{ $brt->id }}" class=" btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                  @endforeach

                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
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

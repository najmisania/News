@include('navbar.head')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
  <div class="container">
    <a href="/"><img class="imgcustom" src="{{asset('img/logodts2.png')}}" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-lg-10 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-left no-padding">
      </div>
      <div class="col-lg-9 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-right">
        <ul class="nav-menu-container navbar-nav ml-auto">
          <ul class="nav-menu">
            <li><a style="color:white;" href="\upload">Upload News</a></li>
          </ul>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <div class="row">
        <div class="col-lg-12">
          <div class="p-2">
            @include('layouts.alert')
            <br>
            <h3 colspan="3" class="text-center">History Berita</h3>
            <br><br><br>
            <form class="user" method="post" action="">
              <table class="table">
                <tr>
                  <th width="5%" class=" text-center">NO</th>
                  <th width="15%" class=" text-center">Judul Berita</th>

                  <th width="10"class=" text-center">Kategori Berita</th>


                  <th width="10"class=" text-center">Tanggal</th>

                  <th width="10"class=" text-center">Status</th>
                  <th width="1" class="text-center">Aksi</th>
                </tr>

                @php
                $no = 1;
                @endphp
                @foreach ($berita as $brt)
                <tr>
                  <td class=" text-center">{{ $no }}</td>
                  <td>{{ $brt->judul }}</td>

                  <td class=" text-center">{{ $brt->kategori }}</td>

                  <td class=" text-center">{{ date('d F Y', strtotime($brt->created_at)) }}</td>
                  <td class="text-center"> {{ $brt->status }}</td>

                  <td class=" text-center">

                    <a href="/history/edit/{{ $brt->id }}" class=" btn btn-warning btn-sm">Edit</a>
                    <a href="/history/hapus/{{ $brt->id }}" class=" btn btn-danger btn-sm" onClick="return confirm('Yakin nih mau dihapus?')">Hapus</a>
                    <a href="#" class=" btn btn-secondary btn-sm">Undisplay</a>
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


@include('navbar.footer')
@include('navbar.script')

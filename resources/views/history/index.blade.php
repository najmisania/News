@include('navbar.head')
<div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                            <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                            <a href="/">
                                <img class="img-fluid" src="{{asset('img/logo-2.png')}}" alt="">
                            </a>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
      <br>
      <br>
      <br>
      <br>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 colspan="3" class="text-center">HISTORY BERITA</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4"></h1>
                    </div><hr>
                    <a href="/upload" class="btn btn-success">Upload News</a>
                    <br><br>
                    <form class="user" method="post" action="">
                      <table  class="table">
                        <tr>
                          <th class=" text-center">NO</th>
                          <th class=" text-center">Judul Berita</th>

                          <th class=" text-center">Kategori Berita</th>

                          <th class=" text-center">Ringkasan Berita</th>
                          <th class=" text-center">Tanggal</th>


                          <th class=" text-center">Opsi</th>

                        </tr>
                        @php
                          $no = 1;
                        @endphp
                        @foreach ($berita as $brt)
                          <tr>
                            <td class=" text-center">{{ $no }}</td>
                            <td class=" text-center">{{ $brt->judul }}</td>

                            <td class=" text-center">{{ $brt->kategori }}</td>
                            <td class=" text-center">{{ $brt->ringkasan }}</td>
                            <th class=" text-center">{{ $brt->created_at}}</th>


                            <td class=" text-center">
                              <a href="" class=" btn btn-primary btn-sm">Lihat Berita</a>
                              <a href="/history/edit/{{ $brt->id }}" class=" btn btn-warning btn-sm">Edit</a>
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

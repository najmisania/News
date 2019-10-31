@include('navbar.head')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
        <div class="container">
            <a href="/">
                <img class="img-fluid" src="{{asset('img/logo-2.png')}}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-lg-10 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        </div>
                       
                    </div>
                </div>
                </nav>
<br>
<br>
<br>
<br>
                <div class="page-content">
                    <div class="container-fluid">
                          <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30">
                              <h6 class="pl-3 pr-3 text-capitalize font400 mb-20 text-center">Daftar Event</h6>
                            <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Event</th>
                                        <th>Bulan Pelaksana</th>
                                        <th>Keterangan</th>
                                        <th>Tipe Event</th>
                                        <th>Minimal Usia</th>
                                        <th>Maksimal Usia</th>
                                        <th>Status Event</th>
                                        <th>Nasional</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td class=" text-center">
                      <a href="#" class=" btn btn-primary btn-sm">Daftar Jadwal</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               @extends('navbar.footer')
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
    @extends ('navbar.script')
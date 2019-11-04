@extends('navbar.head')
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
                        <li><a style="color:white;" href="\jadwal">Lihat Event</a></li>
                    </ul>
                </ul>
            </div>
        </div>

    </div>
</nav>
<br>
<div class="container">
	<h1 class="text-center">Tambah Event</h1>
	<br>
	<br>
	<br>
	<br>
	<form action="/tambah/jadwal" method="post">

		{{csrf_field()}}

		<div class="form-group row">
			<label for="nama_event" class="col-sm-2 col-form-label">Nama Event</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-3">
				<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="">
			</div>
			<label for="jam" class="col-form-label">Jam</label>
			<div class="col-3">
				<input type="text" name="jam" class="form-control" id="jam" placeholder="">
			</div>
		</div>

		<!-- <div class="form-group row">
			<label for="jam" class="col-sm-2 col-form-label">Jam</label>
			<div class="col-3">
				<input type="text" name="jam" class="form-control" id="jam" placeholder="">
			</div>
		</div> -->

		<div class="form-group row">
			<label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
			<div class="col-sm-10">
				<input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="">
			</div>
		</div>

		<div class="form-group row">
			<label for="reminder" class="col-sm-2 col-form-label">Reminder</label>
			<div class="col-sm-10">
				<input type="text" name="reminder" class="form-control" id="reminder" placeholder="">
			</div>
		</div>

		<div class="form-group row">
			<label for="jenis_kegiatan" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
			<div class="col-sm-10">
				<input type="text" name="jenis_kegiatan" class="form-control" id="jenis_kegiatan" placeholder="">
			</div>
		</div>
		
		<button type="submit" class="col-sm-12 btn btn-primary">Simpan</button>
	</form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
@include('navbar.footer')
@include('navbar.script')

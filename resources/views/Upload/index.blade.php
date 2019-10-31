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

                                    <li><a style="color:white;" href="\history">History Berita</a></li>
                                </ul></ul>
                        </div>
                    </div>
                </div>
                </nav>
<br>
<div class="container">
	<h1 class="text-center">Upload Berita</h1>
	<br>
	<br>
	<br>
	<br>
	<form action="/upload/berita" method="post">

		{{csrf_field()}}

		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="judul" id="judul" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="sub_judul" class="col-sm-2 col-form-label">Sub Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" name="sub_judul" class="form-control" id="sub_judul" placeholder="">
			</div>
		</div>

		<div class="form-group row">
			<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-3">
				<select name="kategori" class="form-control" id="kategori" style="width: 195px">
				<option selected disabled>-- Pilih Kategori --</option>
				<option value="DTS">DTS</option>
				<option value="NON-DTS">NON-DTS</option>
			</select>
			</div>
		</div>


		<div class="form-group row">
			<label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan Berita</label>
			<div class="col-sm-10">
				<input type="text" name="ringkasan" class="form-control" id="ringkasan" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="isi">Isi Berita</label>
			<textarea class="form-control" name="isi" class="isi" id="isi" rows="7"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
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

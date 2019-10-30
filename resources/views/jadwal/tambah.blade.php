@extends('navbar.head')
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
<div class="container">
	<h1 class="text-center">Tambah Jadwal</h1>
	<br>
	<br>
	<br>
	<br>
	<form action="/upload/berita" method="post">

		{{csrf_field()}}

		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">Nama Event</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="">
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

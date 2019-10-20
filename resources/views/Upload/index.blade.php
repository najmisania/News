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
	<h1 class="text-center">Upload Berita</h1>
	<br>
	<br>
	<br>
	<br>
	<form action="/upload/berita" method="post">

		  {{csrf_field()}}

		<div class="form-group row">
			<label for="judulberita" class="col-sm-2 col-form-label">Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="judulberita" id="judulberita" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="subjudulberita" class="col-sm-2 col-form-label">Sub Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" name="subjudulberita" class="form-control" id="subjudulberita" placeholder="">
			</div>
		</div>

		<fieldset class="form-group">

							<label for="kategori">Kategori</label>
							<select name="kategori" class="form-control" id="kategori">
								<option>DTS</option>
								<option>NON-DTS</option>
							</select>

		</fieldset>
		<div class="form-group row">
			<label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan Berita</label>
			<div class="col-sm-10">
				<input type="text" name="ringkasan" class="form-control" id="ringkasan" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="isiberita">Isi Berita</label>
			<textarea class="form-control" name="isiberita" class="isiberita" id="isiberita" rows="7"></textarea>
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

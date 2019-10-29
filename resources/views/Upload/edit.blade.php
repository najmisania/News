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
	<h1 class="text-center">Edit Berita</h1>
	<br>
	<br>
	<br>
	<br>
	<form action="/history/update/{{ $berita->id }}" method="post">

		{{csrf_field()}}
		{{ method_field('PUT') }}

		<div class="form-group row">
			<label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="judul" id="judul" value="{{ $berita->judul }}">
			</div>
		</div>
		<div class="form-group row">
			<label for="sub_judul" class="col-sm-2 col-form-label">Sub Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" name="sub_judul" class="form-control" id="sub_judul" value="{{ $berita->sub_judul }}">
			</div>
		</div>

		<div class="form-group row">
			<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
			<div class="col-3">
				<select name="kategori" class="form-control" id="kategori" style="width: 195px">
				<option selected disabled value="{{ $berita->kategori }}">{{ $berita->kategori }}</option>
				<option value="DTS" @if($berita->berita == 'DTS') selected @endif>DTS</option>
				<option value="NON-DTS" @if($berita->berita == 'NON-DTS') selected @endif>NON-DTS</option>
			</select>
			</div>
		</div>


		<div class="form-group row">
			<label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan Berita</label>
			<div class="col-sm-10">
				<input type="text" name="ringkasan" class="form-control" id="ringkasan" value="{{ $berita->ringkasan }}">
			</div>
		</div>
		<div class="form-group">
			<label for="isi">Isi Berita</label>
			<textarea class="form-control" name="isi" id="isi" rows="7">{{ $berita->isi }}</textarea>
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

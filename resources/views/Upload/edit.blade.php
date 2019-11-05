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
				<option @if($berita->kategori == 'DTS') selected value="{{ $berita->kategori }}"@endif>DTS</option>
				<option @if($berita->kategori == 'NON-DTS') selected value="{{ $berita->kategori }}" @endif>NON-DTS</option>
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
    <div class="form-group row">
      <label for="status" class="col-sm-2 col-form-label">Status</label>
      <div class="col-3">
      <select class="form-control" name="status">
        <option @if($berita->status == "1") selected value="{{ $berita->status }}"@endif>Enable</option>
        <option @if($berita->status == "0") selected value="{{ $berita->status }}"@endif>Disable</option>
      </select>
      </div>

    </div>
		<button type="submit" class="btn btn-primary">Update History</button>
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

@include('navbar.head')
<div class="header-top">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
				<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
					<a href="/">
						<h1 style="color: white;">DTS News</h1>
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
	<br
	<form>
		<div class="form-group row">
			<label for="judulberita" class="col-sm-2 col-form-label">Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="judulberita" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="subjudulberita" class="col-sm-2 col-form-label">Sub Judul Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="subjudulberita" placeholder="">
			</div>
		</div>
		<div class="form-group row">
			<label for="judulberita" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="judulberita" placeholder="">
			</div>
			<label for="judulberita" class="col-form-label">Jam</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="judulberita" placeholder="">
			</div>
		</div>
		<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Kategori Berita</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="dts" value="option1" checked>
          <label class="form-check-label" for="dts">
            DTS
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="nondts" value="option2">
          <label class="form-check-label" for="nondts">
            Non DTS
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
			<label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan Berita</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="ringkasan" placeholder="">
			</div>
		</div>
  <div class="form-group">
    <label for="isiberita">Isi Berita</label>
    <textarea class="form-control" id="isiberita" rows="7"></textarea>
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
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
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-15 col-lg-12 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="card">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center section_title">
                <h3 class="text-center">UPLOAD BERITA</h3>
              </div><hr>
              <form class="user" method="POST" action="">
                <div class="form-group row">

                  <div class="col-sm-11">
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1">
                    <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                      <path fill="#989898" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" />
                    </svg>
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="datepicker form-control form-control-user" autocomplete="off" id="tanggal" name="tanggal" placeholder="Tanggal">
                  </div>
                  <div class="col-sm-1">
                    <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                      <path fill="#989898" d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" />
                    </svg>
                  </div>
                  <div class="col-sm-5">
                     <input type="text" class="form-control form-control-user" autocomplete="off" id="jam" name="jam" placeholder="Jam">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1">
                   <svg style="width:30px;height:30px" viewBox="0 0 24 24">
                    <path fill="#989898" d="M15,12H16.5V16.25L19.36,17.94L18.61,19.16L15,17V12M23,16A7,7 0 0,1 16,23C13,23 10.4,21.08 9.42,18.4L8,17.9L2.66,19.97L2.5,20A0.5,0.5 0 0,1 2,19.5V4.38C2,4.15 2.15,3.97 2.36,3.9L8,2L14,4.1L19.34,2H19.5A0.5,0.5 0 0,1 20,2.5V10.25C21.81,11.5 23,13.62 23,16M9,16C9,12.83 11.11,10.15 14,9.29V6.11L8,4V15.89L9,16.24C9,16.16 9,16.08 9,16M16,11A5,5 0 0,0 11,16A5,5 0 0,0 16,21A5,5 0 0,0 21,16A5,5 0 0,0 16,11Z" />
                  </svg>
                </div>
                <div class="text-center section_title">
                	<select class="form-control">

                      
                        <option value=""></option>
                    
                      
                    </select>
                  <h3>
                    Katergori Berita
                  </h3>
                </div><hr>
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                      <input class="btn btn-primary btn-lg btn-block"  type="submit" name="button" value="Submit">
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@include('navbar.footer')
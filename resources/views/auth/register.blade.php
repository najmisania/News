@extends('navbar.head')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
  <div class="container">
    <a href="/"><img class="imgcustom" src="{{asset('img/logodts2.png')}}" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-lg-10 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-left no-padding">
      </div>
      <div class="col-lg-9 align-items-center justify-content-between col-md-6 col-sm-6 col-6 header-top-right">
        <ul class="nav-menu-container navbar-nav ml-auto">
          <ul class="nav-menu">
            <li><a style="color:white;" href="{{url('/admin/login')}}">Login</a></li>
          </ul>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div> <br><br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
    <img src="{{asset('img/dts.png')}}" alt="" width="300px">
  </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <br><br><br>
@extends('navbar.footer')

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
</div> <br><br><br>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
    <img src="{{asset('img/dts.png')}}" alt="" width="300px">
  </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login Admin') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <br>
                            <div class="text-left medium">
                                Don't have an account?<a href="{{route('register')}}">  Sign Up</a>
                            </div>
                            <div class="text-left medium">
                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>
                       
                                <!--  Don't have an account?<a href="{{route('register')}}">  Sign Up</a>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                                <br>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

@extends('navbar.footer')

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel header-top">
 <div class="container">

                                <h3 style="color: white;">DTS News</h3>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                  <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{route('login')}}"><span class="lnr lnr-phone-user"></span><span>Login</span></a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ url('/admin') }}">
                                          {{ __('Admin') }}
                                      </a>
                                      <a class="dropdown-item" href="{{ url('/login') }}">
                                          {{ __('User') }}
                                      </a>


                                  </div>

                                </li>
                                <li class="nav-item"><a style="color: white;" class="nav-link" href="{{route('register')}}">Register</a></li>
                            </ul>
                        </div>

                </div>

          </nav>
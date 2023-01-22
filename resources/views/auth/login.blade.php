    {{-- @extends('layouts.app-login')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


     --}}


     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="{{asset('backend/assets/css/login.css')}}">
    </head>
     <body>
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card py-3 px-2">
                        <p class="text-center mb-3 mt-2">Login With</p>
                        <div class="row mx-auto ">
                            <div class="col-4">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="col-4">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <div class="col-4">
                                <i class="fab fa-google"></i>
                            </div>
                        </div>
                        <div class="division">
                            <div class="row">
                                <div class="col-3"><div class="line l"></div></div>
                                <div class="col-6"><span>Sign In</span></div>
                                <div class="col-3"><div class="line r"></div></div>
                            </div>
                        </div>
                        <form class="myform">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                              </div>
                             <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe">
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Rester connecte</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12 bn">Mot se passe oublie</div>
                              </div>
                              <div class="form-group mt-3">
                                  <button type="button" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Se connecter</small></button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
     </body>
     </html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Anggota Muda | Remaja Mujahidin</title>
  </head>
  <body>
    <!-- Navbar awal -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <img src="img/logo-rm.png" alt="logo-rm" width="35" />
        </div>
        <a class="navbar-brand" >Remaja Mujahidin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Navbar akhir -->
  </body>
</html>

<div class="container mt-5">
    @yield('container')
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h3 class="text-center">Login</h3>
            <h5 class="text-center">Akun Anggota Muda</h5>
            <p class="text-center">Silahkan isi data di bawah ini!</p>
                    <form method="post" action="/logindatamuda">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="row justify-content-center">

                                <div class="col-md-6">
                                    <fieldset>
                                        <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Username</label>
                                        <input id="email" name="email" type="text" class="custom-select form-control @error('username') is-invalid @enderror">
                                        
                                        {{-- <select name="username" id="username" class="custom-select form-control @error('username') is-invalid @enderror">
                                          <option selected>Pilih Username</option>
                                          {{-- @foreach ($data as $item)
                                          <option size="3" aria-label="size 3 select example" value="{{ $item->id }}">{{ $item->username}}</option>
                                          @endforeach 
                                        </select>--}}
                                        @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        {{-- <input id="username" type="text" class="form-control" name="username" 
                                        value="@foreach ($username as $item){{ $item->username }}@endforeach"> --}}
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="row justify-content-center">
                                <label for="password" class="col-md-6 col-form-label text-md-right mb-1 mt-3">{{ __('Password') }}</label>

                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> --}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="row justify-content-center">
                                <div class="col-md-9 offset-md-3 mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a type="button" href="/kaderisasi_v" class="btn btn-primary">
                                        Cancel
                                    </a>
    
                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- <form action="/login" method="post">
                        @csrf
                      <h1 class="h3 mb-3 fw-normal text-center">Selamat Datang</h1>
                      <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                    </form> --}}
            </div>
        </div>
    </div>
</div>


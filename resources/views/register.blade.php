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

    <title>Register | Remaja Mujahidin</title>
  </head>
  <body>
    <!-- Navbar awal -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <img src="img/logo-rm.png" alt="logo-rm" width="35" />
        </div>
        <a class="navbar-brand" href="/">Remaja Mujahidin</a>
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
            <h4 class="text-center">Register User</h4>
            <p class="text-center">Silahkan isi data anda</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row mb-2">
                    <div class="row-justify-content-center">
                        
                    </div>
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                    <div class="col-md-6">
                        <input id="role" type="role" class="form-control @error('role') is-invalid @enderror" name="role"  placeholder="Role">
                        <small>(1: Administrator, 2:Syiar, 3:Kaderisasi, 4:Anggota Muda)</small>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- <div class="form-group row mb-2">
                <div class="col-md-4 col-form-label text-md-right">
                    <label
                    for="exampleInputEmail1" 
                    input-group
                    class="form-label">Role</label>
                </div>
                <div class="col-md-6">
                    <select name="role" id="role" class="form-select form-control @error('role') is-invalid @enderror">
                        <option value="0" selected>Pilih Role</option>
                        <option value="1">Administrator</option>
                        <option value="2">Kaderisasi</option>
                        <option value="3">Syiar</option>
                        <option value="4">Anggota Muda</option>
                        @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </select>
                    
                </div>
                </div> --}}
                
                <div class="form-group row mb-2">
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



 

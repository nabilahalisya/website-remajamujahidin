@extends('layouts.master')

@section('content')

@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Profile User
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Profile User
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                                <div class="card">
                                    <div class="card-header">{{ __('Reset Password') }}</div>
                    
                                    <div class="card-body">
                                        <form method="get" action="/ubahpassword">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required autocomplete="new-password">
                    
                                                    @error('new_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="new_confirm_password" required autocomplete="new-password">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Reset Password') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                {{-- <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/narahubung" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form> --}}
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
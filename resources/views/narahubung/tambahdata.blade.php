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
            <h3>Ubah Data Narahubung
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Narahubung
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
                            <form
                                action="/insertdatanarahubung"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Tulis Email</label
                                >
                                    <input
                                    type="text"
                                    name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    aria-describedby="emailHelp"
                                    value="{{ old('email') }}" 
                                    /> 
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis No Hp</label
                                    >
                                        <input
                                        type="number"
                                        name="no_hp"
                                        class="form-control @error('no_hp') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('no_hp') }}" 
                                        /> 
                                    @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Alamat</label
                                    >
                                    <input
                                        type="text"
                                        name="alamat"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('alamat') }}" 
                                        /> 
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/narahubung" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
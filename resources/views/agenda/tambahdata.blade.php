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
            <h3>Tambah Data Agenda Remaja Mujahidin</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Agenda Remaja Mujahidin</li>
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
                                action="/insertdataagenda"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Gambar</label
                                    >
                                    <input
                                        type="file"
                                        name="gambar"
                                        class="form-control-file @error('gambar') is-invalid @enderror"
                                    />{{ old('gambar') }}
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Judul</label
                                    >
                                    <input
                                        type="text"
                                        name="judul"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('judul') }}" 
                                        /> 
                                    @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Waktu Pelaksanaan</label
                                    >
                                    {{-- <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control"
                                        aria-describedby="emailHelp"
                                    /> --}}
                                    <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control @error('waktu_pelaksanaan') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('waktu_pelaksanaan') }}" 
                                        /> 
                                    @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Deskripsi</label
                                    >
                                    <input
                                        type="text"
                                        name="deskripsi"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('deskripsi') }}"
                                    />
                                    @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                     @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/syiar" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
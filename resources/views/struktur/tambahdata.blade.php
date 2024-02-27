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
            <h1>Tambah Data Struktur Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Struktur Remaja Mujahidin</li>
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
                                action="/insertdatastruktur"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                                <div class="mb-3">
                                    <label
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
                                        >Tambah Nama</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('nama') }}" 
                                        /> 
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Jabatan</label
                                    >
                                    <input
                                        type="text"
                                        name="jabatan"
                                        class="form-control @error('jabatan') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('jabatan') }}"
                                    />
                                    @error('jabatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Deskripsi</label
                                    >
                                    <textarea id="summernote" type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}
                                    </textarea>
                                    {{-- <input
                                        type="text"
                                        name="deskripsi"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('deskripsi') }}"
                                    /> --}}
                                    @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                     @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/struktur" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
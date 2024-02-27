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
            <h3>Tambah Periode Pendaftaran Anggota Remaja Mujahidin</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Periode Pendaftaran Anggota Remaja Mujahidin</li>
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
                                action="/insertperiode"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                               
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Angkatan</label
                                    >
                                    <input
                                        type="text"
                                        name="angkatan"
                                        class="form-control @error('angkatan') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('angkatan') }}" 
                                        /> 
                                    @error('angkatan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Tanggal Mulai</label
                                    >
                                    {{-- <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control"
                                        aria-describedby="emailHelp"
                                    /> --}}
                                    <input
                                        type="date"
                                        name="tanggal_mulai"
                                        class="form-control @error('tanggal_mulai') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('tanggal_mulai') }}" 
                                        /> 
                                    @error('tanggal_mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Tanggal Selesai</label
                                    >
                                    {{-- <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control"
                                        aria-describedby="emailHelp"
                                    /> --}}
                                    <input
                                        type="date"
                                        name="taggal_selesai"
                                        class="form-control @error('taggal_selesai') is-invalid @enderror"
                                        aria-describedby="emailHelp"
                                        value="{{ old('taggal_selesai') }}" 
                                        /> 
                                    @error('taggal_selesai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/creates" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
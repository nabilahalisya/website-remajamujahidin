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
            <h1>Tambah Data Sejarah Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Sejarah Remaja Mujahidin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row-mb-2">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form
                action="/insertdatasejarah"
                method="POST"
                enctype="multipart/form-data"
            >
            @csrf
                <div class="mb-3">
                    <label
                        for="exampleInputEmail1"
                        class="form-label"
                        >Sejarah Remaja Mujahidin</label
                    >

                    {{-- <input
                        type="text"
                        name="deskripsi"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                    /> --}}

                <!-- /.card-header -->
                <textarea id="summernote" type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}
                </textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

              </div>
              <button type="submit" class="btn btn-primary">
                  Submit
              </button>
              <a type="button" href="/sejarah" class="btn btn-primary">
                Cancel
            </a>
              
              </div>

              </div>
              <!-- /.card-body -->
            </div>
            
            <!-- /.card -->
          </div>
        </div>
    </section>
</div>

    
@endsection
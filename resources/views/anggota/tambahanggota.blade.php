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
            <h1>Tambah Data Anggota Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Anggota Remaja Mujahidin</li>
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
                                action="/insertanggota"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Nama Lengkap</label>
                                    
                                    <select name="nama_lengkap" id="nama_lengkap" class="custom-select form-control @error('nama_lengkap') is-invalid @enderror">
                                      <option selected>Pilih Nama</option>
                                      @foreach ($nama as $item)
                                      <option size="3" aria-label="size 3 select example" value="{{ $item->id }}">{{ $item->nama_lengkap}}</option>
                                      @endforeach
                                    </select>
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Asal Daerah</label>
                                    
                                    <select name="domisili" id="domisili" class="custom-select form-control @error('domisili') is-invalid @enderror">
                                      <option selected>Pilih Nama</option>
                                      @foreach ($nama as $item)
                                      <option size="3" aria-label="size 3 select example" value="{{ $item->id }}">{{ $item->domisili}}</option>
                                      @endforeach
                                    </select>
                                    @error('domisili')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>

                            <div class="mb-3">
                                <fieldset >
                                  <label
                                      for="exampleInputEmail1"
                                      class="form-label"
                                      >Angkatan</label
                                  >
                                  <input type="hidden" name="angkatan" value="@foreach ($akt as $items){{ $items->angkatan }}@endforeach">
                                  <input
                                      type="number"
                                      name="angkatan_view"
                                      class="form-control"
                                      aria-describedby="emailHelp"
                                      value="@foreach ($akt as $items){{ $items->angkatan }}@endforeach"
                                       disabled/>
                                </fieldset>
                              </div>

                              <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"input-group
                                    class="form-label"
                                    
                                    >Status</label>
                                <select class="custom-select form-control @error('status') is-invalid @enderror" name="status" id="status">
                                  <option value="0" selected>Pilih Status</option>
                                  <option value="1">Anggota Muda</option>
                                  <option value="2">Anggota Biasa</option>
                                </select>
                                @error('status')
                                          <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                              </div>
                                
                                
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/misi" class="btn btn-primary">
                                  Cancel
                              </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>
    
@endsection
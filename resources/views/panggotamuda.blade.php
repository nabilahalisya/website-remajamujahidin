@extends('layouts.main')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-5 ms mt-4">
            <h3 class="mb-4 mt-4">PENDAFTARAN ANGGOTA MUDA</h3>
            <h5 class="mb-3">Silahkan mengisi form di bawah ini</h5>
            <form action="/insertpmuda" method="POST" enctype="multipart/form-data">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                    @endif
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="text"  class="form-control @error('email') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('email') }}" 
                    /> 
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
                <div class="mb-3">
                  <label class="form-label">Nama Lengkap</label>
                  <input name="nama_lengkap" type="text"  class="form-control @error('nama_lengkap') is-invalid @enderror"
                  aria-describedby="emailHelp"
                  value="{{ old('nama_lengkap') }}" 
                  /> 
              @error('nama_lengkap')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                  <label  class="form-label">Pendidikan Terkahir</label>
                  <input name="pendidikan_terakhir" type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                  aria-describedby="emailHelp"
                  value="{{ old('pendidikan_terakhir') }}" 
                  /> 
              @error('pendidikan_terakhir')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">No Hp</label>
                    <input name="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('no_hp') }}" 
                    /> 
                @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Domisili</label>
                    <input  name="domisili" type="text" class="form-control @error('domisili') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('domisili') }}" 
                    /> 
                @error('domisili')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                
            
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" href="/kaderisasi_v" class="btn btn-primary">
                    Cancel
                </a>
            </form>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 mt-5">
            <img src="gambarvisi/ymg.jpg" width="400 px" alt="">
        </div>
    </div>
</div>
@endsection
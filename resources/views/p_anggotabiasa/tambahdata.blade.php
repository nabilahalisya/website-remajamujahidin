@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mt-4">
            <h3 class="mb-4 mt-4">PENDAFTARAN ANGGOTA BIASA</h3>
            <h5 class="mb-3">Silahkan mengisi form di bawah ini</h5>
            <form action="/insertdatabiasa" method="POST" enctype="multipart/form-data">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                    @endif
                @csrf
                <div class="mb-3">
                  <label class="form-label">ID Anggota Muda</label>
                  <input name="id_anggota_muda" type="text" class="form-control @error('id_anggota_muda') is-invalid @enderror"
                  aria-describedby="emailHelp"
                  value="{{ old('id_anggota_muda') }}" 
                  /> 
              @error('id')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                  <label  class="form-label">Tempat Lahir</label>
                  <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                  aria-describedby="emailHelp"
                  value="{{ old('tempat_lahir') }}" 
                  /> 
              @error('tempat_lahir')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Tanggal Lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('tgl_lahir') }}" 
                    /> 
                @error('tgl_lahir')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                  </div>
                <div class="mb-3">
                    <label  class="form-label">Kelas (isi dengan angka)</label>
                    <input name="kelas" type="text" class="form-control @error('kelas') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('kelas') }}" 
                    /> 
                @error('kelas')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Semester (isi dengan angka)</label>
                    <input  name="semester" type="text" class="form-control @error('semester') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('semester') }}" 
                    /> 
                @error('semester')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">No Hp Orang Tua (format : 0896xxxx)</label>
                    <input name="no_hp_orang_tua" type="number" class="form-control @error('no_hp_orang_tua') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('no_hp_orang_tua') }}" 
                    /> 
                @error('no_hp_orang_tua')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Nama Kelompok Pembinaan</label>
                    <input  name="nama_kelompok_pembinaan" type="text" class="form-control @error('nama_kelompok_pembinaan') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('nama_kelompok_pembinaan') }}" 
                    /> 
                @error('nama_kelompok_pembinaan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Riwayat Penyakit (jika tidak ada isi "tidak ada")</label>
                    <input  name="nama_penyakit" type="text" class="form-control @error('nama_penyakit') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('nama_penyakit') }}" 
                    /> 
                @error('nama_penyakit')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Alergi (jika tidak ada isi "tidak ada")</label>
                    <input  name="alergi" type="text" class="form-control @error('alergi') is-invalid @enderror"
                    aria-describedby="emailHelp"
                    value="{{ old('alergi') }}" 
                    /> 
                @error('alergi')
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

        <div class="col-md-4 mt-5" >
            <img class="text-center" src="gambarvisi/ymg.jpg" width="450 px" alt="">
        </div>
    </div>
</div>
@endsection
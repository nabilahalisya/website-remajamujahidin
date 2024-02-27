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
            <h3>Tambah Data Screening Remaja Mujahidin</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Screening Remaja Mujahidin</li>
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
                                action="/insertdatascreening"
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
                                        
                                        {{-- <input
                                        type="text"
                                        name="nama_lengkap"
                                        class="form-control"
                                        aria-describedby="emailHelp"
                                        value="{{ old('nama_lengkap') }}" 
                                        />  --}}
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
                                        
                                    >Hasil Tes Baca Quran</label>
                                    <select name="hasil_tes_baca_quran" id="hasil_tes_baca_quran" class="custom-select form-control @error('hasil_tes_baca_quran') is-invalid @enderror">
                                    
                                      <option value="0" selected>Pilih Hasil Tes Baca Quran</option>
                                      {{-- <option value="1">{{ $hasil_tes_baca_quran }}</option> --}}
                                      <option value="1">Lancar dan Makhrajul Huruf Betul</option>
                                      <option value="2">Lancar tapi Makhrajul Huruf Belum Betul</option>
                                      <option value="3">Terbata-bata</option>
                                      <option value="4">Tidak Bisa Mengaji Sama Sekali</option>
                                      @error('hasil_tes_baca_quran')
                                          <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"input-group
                                        class="form-label"
                                        
                                        >Hasil Kuisioner</label>
                                    <select class="custom-select" name="hasil_kuisioner" id="hasil_kuisioner">
                                      <option value="0" selected>Pilih Hasil Kuisioner</option>
                                      <option value="1">Lengkap</option>
                                      <option value="2">Tidak Mengikuti Sama Sekali</option>
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"input-group
                                        class="form-label"
                                        
                                        >Presensi</label>
                                    <select class="custom-select" name="presensi" id="presensi">
                                      <option value="0" selected>Pilih Presensi</option>
                                      <option value="1">Hadir Seluruh Sesi Materi</option>
                                      <option value="2">Hadir Tiga Sesi Materi</option>
                                      <option value="3">Hadir Dua Sesi Materi</option>
                                      <option value="4">Hadir Satu Sesi Materi</option>
                                      <option value="5">Tidak Hadir Sama Sekali</option>
                                    </select>
                                  </div>
                                
                                  <div class="">  
                                  <div>
                                    <label>Hasil Status   :</label>
                                    <input type="hidden" name="status_kelulusan" id="status_kelulusan">
                                    <label id="status"></label>
                                  </div>
                                  <a href="javascript:void(0)" class="btn btn-warning" id="btn-proses">Proses Kelulusan</a>
                                </div>
                                

                                
                                <button type="submit" class="btn btn-primary mt-3">
                                    Submit
                                </button>
                                <a type="button" href="/screening" class="btn btn-primary mt-3">
                                    Cancel
                                </a>
                            </form>
                    </div>
                </div>
            </div>
    </section>
</div>

<script type="text/javascript">

 $('#btn-proses').on('click', function() {
  htbq = $('#hasil_tes_baca_quran').val();
  hk = $('#hasil_kuisioner').val();
  p = $('#presensi').val();
  if ((htbq == "0") && (hk == "0") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Belum Memilih Penilaian Sama Sekali')
  } else if ((htbq == "0") && (hk == "0") && (p == "1")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "0") && (hk == "0") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "0") && (hk == "0") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "0") && (hk == "0") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "0") && (hk == "0") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Hasil Kuisioner Belum Terisi')
  } 
  
    else if ((htbq == "0") && (hk == "1") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Presensi Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Presensi Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran & Presensi Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran & Presensi Belum Terisi')
  }

    else if ((htbq == "1") && (hk == "0") && (p == "0")) {
      $('#status_kelulusan').val('Hasil Kuisioner & Presensi Belum Terisi');
    $('#status').html('Hasil Kuisioner & Presensi Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Kuisioner & Presensi Belum Terisi');
    $('#status').html('Hasil Kuisioner & Presensi Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Kuisioner & Presensi Belum Terisi');
    $('#status').html('Hasil Kuisioner & Presensi Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Kuisioner & Presensi Belum Terisi');
    $('#status').html('Hasil Kuisioner & Presensi Belum Terisi')
  }
  
    else if ((htbq == "0") && (hk == "1") && (p == "1")) {
      $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "1") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "1") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "1") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "1") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "0")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "1")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } else if ((htbq == "0") && (hk == "2") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Tes Baca Quran Belum Terisi');
    $('#status').html('Hasil Tes Baca Quran Belum Terisi')
  } 

    else if ((htbq == "1") && (hk == "0") && (p == "1")) {
      $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "1") && (hk == "0") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "1") && (hk == "0") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "1") && (hk == "0") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "1") && (hk == "0") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "1")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "2") && (hk == "0") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "1")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "3") && (hk == "0") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "1")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "2")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "3")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "4")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  } else if ((htbq == "4") && (hk == "0") && (p == "5")) {
    $('#status_kelulusan').val('Hasil Kuisioner Belum Terisi');
    $('#status').html('Hasil Kuisioner Belum Terisi')
  }

    else if ((htbq == "1") && (hk == "1") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "1") && (hk == "1") && (p == "1")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "1") && (hk == "1") && (p == "2")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "1") && (hk == "1") && (p == "3")) {
    $('#status_kelulusan').val('Lulus Bersyarat');
    $('#status').html('Lulus Bersyarat')
  } else if ((htbq == "1") && (hk == "1") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "1") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "2") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "1") && (hk == "2") && (p == "1")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "2") && (p == "2")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "2") && (p == "3")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "2") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "1") && (hk == "2") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "1") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "2") && (hk == "1") && (p == "1")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "2") && (hk == "1") && (p == "2")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "2") && (hk == "1") && (p == "3")) {
    $('#status_kelulusan').val('Lulus Bersyarat');
    $('#status').html('Lulus Beryarat')
  } else if ((htbq == "2") && (hk == "1") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "1") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "2") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "2") && (hk == "2") && (p == "1")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "2") && (p == "2")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "2") && (p == "3")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "2") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "2") && (hk == "2") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "1") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "3") && (hk == "1") && (p == "1")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "3") && (hk == "1") && (p == "2")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "3") && (hk == "1") && (p == "3")) {
    $('#status_kelulusan').val('Lulus Bersyarat');
    $('#status').html('Lulus Bersyarat')
  } else if ((htbq == "3") && (hk == "1") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "1") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "2") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "3") && (hk == "2") && (p == "1")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "2") && (p == "2")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "2") && (p == "3")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "2") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "3") && (hk == "2") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "1") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "4") && (hk == "1") && (p == "1")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "4") && (hk == "1") && (p == "2")) {
    $('#status_kelulusan').val('Lulus');
    $('#status').html('Lulus')
  } else if ((htbq == "4") && (hk == "1") && (p == "3")) {
    $('#status_kelulusan').val('Lulus Bersyarat');
    $('#status').html('Lulus Bersyarat')
  } else if ((htbq == "4") && (hk == "1") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "1") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "2") && (p == "0")) { //ada angka 0
    $('#status_kelulusan').val('Presensi Belum Terisi');
    $('#status').html('Presensi Belum Terisi')
  } else if ((htbq == "4") && (hk == "2") && (p == "1")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "2") && (p == "2")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "2") && (p == "3")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "2") && (p == "4")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else if ((htbq == "4") && (hk == "2") && (p == "5")) {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus')
  } else {
    $('#status_kelulusan').val('Tidak Lulus');
    $('#status').html('Tidak Lulus');
  }
 });

</script>
    
@endsection
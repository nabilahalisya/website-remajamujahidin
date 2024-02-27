<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
            crossorigin="anonymous"
        />
       
        <title>Administrator | Remaja Mujahidin</title>
    </head>
    <body>
        <h1 class="text-center mb-4">Ubah Data Screening Remaja Mujahdin</h1>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <form
                                    action="/updatescreening/{{ $data->id }}"
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
                                      
                                        {{-- <label
                                            for="exampleInputEmail1"
                                            class="form-label"
                                            >Nama Lengkap</label
                                        >
                                        <input
                                            type="text"
                                            name="nama_lengkap"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                            value="{{ $data->nama_lengkap }}"
                                        /> --}}
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
    
                                    {{-- <div class="mb-3">
                                        <label
                                            for="exampleInputEmail1"
                                            class="form-label"
                                            >Angkatan</label
                                        >
                                        <input
                                            type="number"
                                            name="angkatan"
                                            class="form-control"
                                            value="{{ $data->angkatan }}"
                                        />
                                    </div> --}}
    
                                    <div class="mb-3">
                                        <label
                                            for="exampleInputEmail1"input-group
                                            class="form-label"
                                            
                                            >Hasil Tes Baca Quran</label>
                                            <select class="custom-select" name="hasil_tes_baca_quran" id="hasil_tes_baca_quran">
                                                <option value="0" selected>Pilih Hasil Tes Baca Quran</option>
                                                <option value="1">Lancar dan Makhrajul Huruf Betul</option>
                                                <option value="2">Lancar tapi Makhrajul Huruf Belum Betul</option>
                                                <option value="3">Terbata-bata</option>
                                                <option value="4">Tidak Bisa Mengaji Sama Sekali</option>
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

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous" type="text/javascript">
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

       </body>
</html>

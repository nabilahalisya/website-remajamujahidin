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
            <h1>Data Hasil Screening Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Hasil Screening Remaja Mujahidin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row-mb2">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/tambahscreening" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Hasil Tes Baca Quran</th>
                                <th scope="col">Hasil Kuisioner</th>
                                <th scope="col">Presensi</th>
                                <th scope="col">Status Kelulusan</th>
                                <th scope="col">Waktu Buat</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">Buat Akun</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($data as $index=>$row)
                          <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $row->nama_lengkap}}</td>
                            <td>{{ $row->id_angkatan }}</td>
                            <td>{{ $row->hasil_tes_baca_quran }}</td>
                            <td>{{ $row->hasil_kuisioner }}</td>
                            <td>{{ $row->presensi }}</td>
                            <td>{{ $row->status_kelulusan }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                              {{-- <a href="/tampilkanscreening/{{ $row->id }}" class="btn btn-success btn-sm">Ubah</a> --}}
                              <a href="/tampilkanscreening/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editscreening">
                                Ubah
                              </a>
                              <a href="/deletescreening/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                            <td>
                              @if ($row->status_kelulusan == "Lulus")
                              <a href="/buatakun" type="button" class="btn btn-info btn-sm">Buat Akun</a>
                          @elseif ($row->status_kelulusan == "Lulus Bersyarat")
                            <a href="/buatakun" type="button" class="btn btn-info btn-sm">Buat Akun</a>
                          @else
                            <a href="" type="button" class="btn btn-info btn-sm disabled">Buat Akun</a>
                          @endif
                                  {{-- @if ($row->status_kelulusan = "Lulus")
                                  <a href="/storeakun" type="button" class="btn btn-info btn-sm">Buat Akun</a>
                                  @elseif
                                  @else 
                                  <a href="/storeakun"  class="btn btn-info btn-sm ">Buat Akun</a>
                                  @endif --}}
                              {{-- @if ($row->status_kelulusan = 'Tidak Lulus')
                              <a href="/storeakun" type="button" class="btn btn-info btn-sm disabled">Buat Akun</a>
                              @else
                              <a href="/storeakun" type="button" class="btn btn-info btn-sm">Buat Akun</a>
                              @endif --}}
                              {{-- <a href="/storeakun" type="button" class="btn btn-info btn-sm">Buat Akun</a> --}}
                            </td>
                          </tr>

                          
                          {{-- Modal untuk ubah data sejarah --}}
                       <div class="modal fade" id="editscreening">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">
                               <h4 class="modal-title">Ubah Data Hasil Screening Remaja Mujahdin</h4>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                             <div class="modal-body">

                               <form
                                   action="/updatescreening/{{ $row->id }}"
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
                       @endforeach
                        </tbody>
                      </table>
                      <div class="card-body">
                        <div class="d-flex justify-content-end">
                          {{ $data->links() }}
                        </div>
                    </div>
                     
                
                
              {{-- <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> --}}
            </div>
            
            <!-- /.card -->
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


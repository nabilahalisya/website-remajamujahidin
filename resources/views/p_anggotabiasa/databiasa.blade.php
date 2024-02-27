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
            <h1>Data Anggota Biasa Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Anggota Biasa Remaja Mujahidin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
      <div class="container-lg">
        <div class="row-mb-2">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/tambahdata" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    @endif
                    <div class="table-responsive-xl">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                    <th scope="col">ID Anggota Muda</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">No Hp Orang Tua</th>
                                    <th scope="col">Nama Kelompok Pembinaan</th>
                                    <th scope="col">Riwayat Penyakit</th>
                                    <th scope="col">Alergi</th>
                                    <th scope="col">Waktu Dibuat</th>
                                    <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $no = 1;
                              @endphp
                              @foreach ($data as $index=>$row)
                              <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->id_anggota_muda }}</td>
                                <td>{{ $row->tempat_lahir }}</td>
                                <td>{{ $row->tgl_lahir }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>{{ $row->semester }}</td>
                                <td>0{{ $row->no_hp_orang_tua }}</td>
                                <td>{{ $row->nama_kelompok_pembinaan }}</td>
                                <td>{{ $row->nama_penyakit }}</td>
                                <td>{{ $row->alergi }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>
                                  {{-- <a href="/tampilkanpbiasa/{{ $row->id }}" class="btn btn-success btn-sm">Ubah</a> --}}
                                  <a href="/tampilkanbiasa/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editbiasa">
                                    Ubah
                                  </a>
                                  <a href="/deletedatabiasa/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                              </tr>

                              {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editbiasa">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Pendaftaran Anggota Muda Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form action="/updatepbiasa/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="mb-3">
                                    <label class="form-label">ID Anggota Muda</label>
                                    <input name="id_anggota_muda" type="number" class="form-control" value="{{ $row->id_anggota_muda }}">
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" value="{{ $row->tempat_lahir }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Tanggal Lahir</label>
                                      <input name="tgl_lahir" type="date" class="form-control" value="{{ $row->tgl_lahir }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Kelas</label>
                                      <input  name="kelas" type="number" class="form-control" value="{{ $row->kelas }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Semester</label>
                                      <input  name="semester" type="number" class="form-control" value="{{ $row->semester }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">No Hp Orang Tua</label>
                                      <input  name="no_hp_orang_tua" type="number" class="form-control" value="{{ $row->no_hp_orang_tua }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Nama Kelompok Pembinaan</label>
                                      <input  name="nama_kelompok_pembinaan" type="text" class="form-control" value="{{ $row->nama_kelompok_pembinaan }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Riwayat Penyakit</label>
                                      <input  name="nama_penyakit" type="text" class="form-control" value="{{ $row->nama_penyakit }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Alergi</label>
                                      <input  name="alergi" type="text" class="form-control" value="{{ $row->alergi }}">
                                  </div>
                              
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <a type="button" href="/muda" class="btn btn-primary">
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
    
@endsection


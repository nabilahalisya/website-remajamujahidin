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
            <h1>Data Periode Pendaftaran Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Periode Pendaftaran Remaja Mujahidin</li>
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
                    <a href="/store" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Tanggal Mulai</th>
                                    <th scope="col">Tanggal Selesai</th>
                                    <th scope="col">Tanggal buat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($create as $index=>$row)
                                <tr>
                                    <th scope="row">{{ $index + $create->firstItem() }}</th>
                                    <td>{{ $row->angkatan }}</td>
                                    <td>{{ $row->tanggal_mulai }}</td>
                                    <td>{{ $row->taggal_selesai }}</td>
                                    <td>{{ $row->created_at}}</td>
                                    <td>
                                        {{-- <a href="/showperiode/{{ $row->id }}" type="button" class="btn btn-success btn-sm">Ubah</a> --}}
                                        <a href="/showperiode/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editperiode">
                                          Ubah
                                        </a>
                                        {{-- <a type="button" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                                          Hapus
                                        </a> --}}
                                        <a href="/deleteperiode/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>

                                        {{-- <a
                                            href="/deletedataagenda/{{ $row->id }}"
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Hapus
                                        </a> --}}
                                    </td>
                                </tr>
                               {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editperiode">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Periode Pendaftaran Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form
                                action="/updateperiode/{{ $row->id }}"
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
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->angkatan }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Tanggal Mulai</label
                                    >
                                    <input
                                        type="date"
                                        name="tanggal_mulai"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->tanggal_mulai }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Tanggal Selesai</label
                                    >
                                    <input
                                        type="date"
                                        name="taggal_selesai"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->taggal_selesai }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/creates" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                                    @endforeach
                                  </tbody>
                                </table>
                                <div class="card-body">
                                  <div class="d-flex justify-content-end">
                                    {{ $create->links() }}
                                  </div>
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
              </div>
            </div>
            
            <!-- /.card --> --}}
          </div>
        </div>
    </section>
</div>
    
@endsection
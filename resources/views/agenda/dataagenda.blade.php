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
            <h1>Data Agenda Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Agenda Remaja Mujahidin</li>
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
                    <a href="/tambahagenda" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Waktu Pelaksanaan</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Tanggal buat</th>
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
                                    <td>
                                        <img
                                            src="{{ asset('gambarvisi/'.$row->gambar) }}"
                                            width="50px;"
                                            alt=""
                                        />
                                    </td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->waktu_pelaksanaan }}</td>
                                    <td>{{ $row->deskripsi }}</td>
                                    <td>{{ $row->created_at}}</td>
                                    <td>
                                      <a href="/tampilkandataagenda/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editagenda">
                                        Ubah
                                      </a>
                                      {{-- <a href="/tampilkandataagenda/{{ $row->id }}" type="button" class="btn btn-success btn-sm">
                                        Ubah
                                      </a> --}}
                                        {{-- <a type="button" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                                          Hapus
                                        </a> --}}
                                        <a href="/deletedataagenda/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>

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
                      <div class="modal fade" id="editagenda">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Ubah Data Agenda Remaja Mujahdin</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <form
                                action="/updatedataagenda/{{ $row->id}}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Tambah Gambar</label
                                >
                                <input
                                    type="file"
                                    name="gambar"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                />
                            </div>

                            <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Judul</label
                                    >
                                    <input
                                        type="text"
                                        name="judul"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->judul }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Waktu Pelaksanaan</label
                                    >
                                    <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        {{ $row->waktu_pelaksanaan }}
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Deskripsi</label
                                    >
                                    <input
                                        type="text"
                                        name="deskripsi"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->deskripsi }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/agenda" class="btn btn-primary">
                                    Cancel
                                </a>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
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
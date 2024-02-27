@extends('layouts.master')

@section('content')

@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <title>Struktur | Remaja Mujahidin</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Struktur Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Struktur Remaja Mujahidin</li>
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
                    <a href="/tambahstruktur" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Tanggal buat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $index=>$rows)
                                <tr>
                                    <th scope="row">{{ $index + $data->firstItem()}}</th>
                                    <td>
                                        <img
                                            src="{{ asset('img/agenda/'.$rows->gambar) }}"
                                            width="50px;"
                                            alt=""
                                        />
                                    </td>
                                    <td>{{ $rows->nama }}</td>
                                    <td>{{ $rows->jabatan }}</td>
                                    <td>{!! $rows->deskripsi !!}</td>
                                    <td>{{ $rows->created_at}}</td>
                                    <td>
                                      <a href="/tampilkandatastruktur/{{ $rows->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editstruktur">
                                        Ubah
                                      </a>
                                        <a href="/deletedatastruktur/{{ $rows->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                        {{-- <a
                                            href="/deletedatastruktur/{{ $row->id }}"
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Hapus
                                        </a> --}}
                                    </td>
                                </tr>
                                  
                                {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editstruktur">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Struktur Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form
                                action="/updatedatastruktur/{{ $rows->id}}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                            <div class="mb-3">
                                {{-- <label
                                    for="formFile"
                                    class="form-label"
                                    >Tambah Gambar</label> --}}
                                    {{-- <label for="formFile" class="form-label">Tambah Gambar</label>
                                <input
                                    type="file"
                                    name="gambar"
                                    class="formFile"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                /> --}}
                                  <label for="exampleFormControlFile1">Tambah Gambar</label>
                                  <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Nama</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $rows->nama }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Jabatan</label
                                    >
                                    <input
                                        type="text"
                                        name="jabatan"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $rows->jabatan }}"
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
                                        value="{{ $rows->deskripsi }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/struktur" class="btn btn-primary">
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
              </div>
            </div>
            
            <!-- /.card --> --}}
          </div>
        </div>
    </section>
</div>
    
@endsection
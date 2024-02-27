@extends('layouts.master')

@section('content')

@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <title>Narahubung | Remaja Mujahidin</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Narahubung Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Narahubung Remaja Mujahidin</li>
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
                    <a href="/tambahnarahubung" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                                    <th scope="col">Email</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Alamat</th>
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
                                    <td>{{ $row->email }}</td>
                                    <td>0{{ $row->no_hp }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->created_at}}</td>
                                    <td>
                                      <a href="/tampilkandatanarahubung/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editnarahubung">
                                        Ubah
                                      </a>
                                        <a href="/deletedatanarahubung/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>

                                        {{-- <a
                                            href="/deletedatanarahubung/{{ $row->id }}"
                                            type="button"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Hapus
                                        </a> --}}
                                    </td>
                                </tr>
                                {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editnarahubung">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Narahubung Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form
                                action="/updatedatanarahubung/{{ $row->id }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Email</label
                                    >
                                    <input
                                        type="text"
                                        name="email"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->email }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah no_hp</label
                                    >
                                    <input
                                        type="number"
                                        name="no_hp"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->no_hp }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tambah Alamat</label
                                    >
                                    <input
                                        type="text"
                                        name="alamat"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $row->alamat }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/narahubung" class="btn btn-primary">
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
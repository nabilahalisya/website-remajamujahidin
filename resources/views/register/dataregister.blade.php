@extends('layouts.master')

@section('content')


@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Data Akun User Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Akun User Remaja Mujahidin</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
      <div class="container-lg">
        <div class="row-mb-2">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/register" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                            <th scope="col-md-3">#</th>
                            <th scope="col-md-3">Nama</th>
                            <th scope="col-md-3">Email</th>
                            {{-- <th scope="col-md-3">Password</th> --}}
                            <th scope="col-md-3">Role</th>
                            <th scope="col-md-3">Waktu Dibuat</th>
                            <th scope="col-md-3">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($users as $index=>$rows)
                          <tr>
                            <th scope="row">{{ $index + $users->firstItem() }}</th>
                            <td>{{ $rows->name }}</td>
                            <td>{{ $rows->email }}</td>
                            {{-- <td>{{ Hash::make($rows->password) }}</td> --}}
                            <td>{{ $rows->role }}</td>
                            <td>{{ $rows->created_at }}</td>
                            <td>
                              <a href="/tampilkandatauser/{{ $rows->id }}" type="button" class="btn btn-success btn-sm">Ubah</a>
                              <a href="/deleteuser/{{ $rows->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                              {{-- <a href="/tampilsejarah/{{ $rows->deskripsi }}" type="button" class="btn btn-danger btn-sm">Tampil</a> --}}

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-end">
                        {{ $users->links() }}
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
              </div> --}}
            </div>
            
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
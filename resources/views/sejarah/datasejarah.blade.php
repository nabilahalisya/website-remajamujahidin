@extends('layouts.master')

@section('content')


@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <title>Sejarah | Remaja Mujahidin</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Data Sejarah Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Sejarah Remaja Mujahidin</li>
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
                <a href="/tambahsejarah" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                            <th scope="col-md-3">Deskripsi</th>
                            <th scope="col-md-3">Waktu Dibuat</th>
                            <th scope="col-md-3">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($data as $index=>$rows)
                          <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{!! $rows->deskripsi !!}</td>
                            <td>{{ $rows->created_at }}</td>
                            <td>
                              {{-- <a href="/tampilkandatasejarah/{{ $rows->id }}" type="button" class="btn btn-success btn-sm">Ubah</a> --}}
                              <a href="/tampilkandatasejarah/{{ $rows->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editsejarah">
                                Ubah
                              </a>
                              <a href="/deletedatasejarah/{{ $rows->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                              {{-- <a href="/tampilsejarah/{{ $rows->deskripsi }}" type="button" class="btn btn-danger btn-sm">Tampil</a> --}}
                              
                            </td>
                          </tr>
                          {{-- Modal untuk ubah data sejarah --}}
                          <div class="modal fade" id="editsejarah">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Ubah Data Sejarah Remaja Mujahdin</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <form
                                  action="/updatedatasejarah/{{ $rows->id }}"
                                  method="POST"
                                  enctype="multipart/form-data"
                              >
                              @csrf
                                  <div class="mb-3">
                                      <label
                                          for="exampleInputEmail1"
                                          class="form-label"
                                          >Sejarah Remaja Mujahidin</label
                                      >
                                      {{-- <textarea type ="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" ></textarea> --}}
                                      <textarea id="summernote" type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">
                                      @foreach ($data as $item)
                                          {{ $item->deskripsi }}
                                      @endforeach</textarea>
                                      {{-- <input
                                          type="textarea"
                                          name="deskripsi"
                                          class="form-control"
                                          id="exampleInputEmail1"
                                          aria-describedby="emailHelp"
                                          value="{{ $data->deskripsi }}"
                                      /> --}}
                                  </div>
  
                                  
                                  
                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                  
                                  <button type="submit" class="btn btn-primary">
                                    Submit
                                  </button>
                                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          
                          </div>
                          @endforeach
                        </tbody>
                        
                      </table>
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
              </div> --}}
            </div>
            
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection


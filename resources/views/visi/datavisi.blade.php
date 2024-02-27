@extends('layouts.master')

@section('content')

@include('sidebar')
       <!-- Content Wrapper. Contains page content -->
  <title>Visi | Remaja Mujahidin</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Visi Remaja Mujahidin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Visi Remaja Mujahidin</li>
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
                <a href="/tambahvisi" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
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
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Waktu Dibuat</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($data as $row)
                          <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{!! $row->deskripsi !!}</td>
                          <td>{{ $row->created_at }}</td>
                          <td>
                            {{-- <a href="/tampilkandatavisi/{{ $row->id }}" class="btn btn-success btn-sm">Ubah</a> --}}
                            <a href="/tampilkandatavisi/{{ $row->id }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editvisi">
                              Ubah
                            </a>
                            <a href="/deletedatavisi/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                          </td>
                      </tr>
                        {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editvisi">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Visi Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form
                                action="/updatedatavisi/{{ $row->id }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Visi Remaja Mujahidin</label
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
                        </form>
                        </div>
                          @endforeach
                          
                          
                        </tbody>
                        
                      </table>
                      
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
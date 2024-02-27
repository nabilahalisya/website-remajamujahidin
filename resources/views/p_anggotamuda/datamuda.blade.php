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
            <h4 class="font-size">Data Pendaftar Anggota Muda Remaja Mujahidin</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Pendaftar Anggota Muda Remaja Mujahidin</li>
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
                <a href="/kaderisasi" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table" id="tabel_pendaftaran_muda">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Pendidikan Terakhir</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Domisili</th>
                                <th scope="col">Tanggal Data</th>
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
                            <td>{{ $row->nama_lengkap }}</td>
                            <td>{{ $row->pendidikan_terakhir }}</td>
                            <td>0{{ $row->no_hp }}</td>
                            <td>{{ $row->domisili }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                              {{-- <input class="id_data" type="hidden" value='{{ $row->id }}' name="id_data"> --}}
                              <button type="button" class="btn btn-success btn-sm edit" name="edit" id="{{ $row->id }}">
                                Ubah
                              </button>
                              {{-- <button type="button" class="btn btn-success btn-sm edit" data-toggle="modal" data-target="#editmuda" id="btn_edit">
                                Ubah
                              </button> --}}
                              {{-- <a href="/tampilkandatamuda/{{ $row->id }}" type="button" class="btn btn-success btn-sm">
                                Ubah
                              </a> --}}
                              <a href="/deletedatamuda/{{ $row->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>

                                  {{-- <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#delete">Hapus</button> --}}
                            </td>
                          </tr>
                          @endforeach
                          {{-- Modal untuk ubah data sejarah --}}
                        <div class="modal fade" id="editmuda">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Ubah Data Pendaftaran Anggota Muda Remaja Mujahdin</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <form action="/updatepmuda" id="formedit" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" id="email" type="text" class="form-control" value="{{ $row->email }}">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control" value="{{ $row->nama_lengkap }}">
                                  </div>
                                  <div class="mb-3">
                                    <label  class="form-label">Pendidikan Terkahir</label>
                                    <input name="pendidikan_terakhir" id="pendidikan_terakhir" type="text" class="form-control" value="{{ $row->pendidikan_terakhir }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">No Hp</label>
                                      <input name="no_hp" id="no_hp" type="number" class="form-control" value="{{ $row->no_hp }}">
                                  </div>
                                  <div class="mb-3">
                                      <label  class="form-label">Domisili</label>
                                      <input  name="domisili" id="domisili" type="text" class="form-control" value="{{ $row->domisili }}">
                                  </div>
                                  <input type="hidden" id="id_data_edit" name="id_data_edit">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <a type="button" href="/muda" class="btn btn-primary">
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
              </div> --}}
            </div>
            
            <!-- /.card -->
          </div>
        </div>
    </section>
</div>
    
<script>
  $('.edit').on('click',function(){
    var id = $(this).attr('id');
    $.ajax({
      url:"/tampilkandatamuda/"+id,
      dataType:"json",
      success: function(data)
      {
        $('#email').val(data.result.email);
        $('#nama_lengkap').val(data.result.nama_lengkap);
        $('#pendidikan_terakhir').val(data.result.pendidikan_terakhir);
        $('#no_hp').val(data.result.no_hp);
        $('#domisili').val(data.result.domisili);
        $('#id_data_edit').val(data.result.id);
        $('#editmuda').modal('show');   
      }
    });    
  });
  
  $('#formedit').on('submit', function(e){
    e.preventDefault();
    $.ajax({
      url:"{{ route('updatepmuda') }}",
      method:"POST",
      data:$(this).serialize(),
      dataType:"json",
      success: function(data)
      {
        if(data.success)
        {
          location.reload();
        }
      }
    });
  });
</script>
@endsection

